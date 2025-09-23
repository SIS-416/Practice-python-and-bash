import requests
import subprocess
import time
from urllib.parse import urljoin

# Configuration
input_file = 'alive-aon.txt'  # Input file with alive URLs
wordlist_file = '/home/asishack/.ZAP/fuzzers/dirbuster/directory-list-1.0.txt'  # Wordlist path
timeout = 5  # Timeout for HTTP requests in seconds
delay = 1    # Delay between requests to avoid rate limiting
threads = 30  # Equivalent to -t 30 in gobuster

# Function to check if a directory exists
def check_directory(base_url, path):
    try:
        full_url = urljoin(base_url, path)
        response = requests.head(full_url, timeout=timeout, allow_redirects=True, verify=True)
        if response.status_code in [200, 301, 302]:
            return full_url, response.status_code
        return None, None
    except requests.RequestException:
        return None, None

# Function to perform directory brute-forcing
def scan_directories(url):
    print(f"Scanning: {url}")
    alive_dirs = []

    # Read wordlist
    try:
        with open(wordlist_file, 'r') as file:
            wordlist = [line.strip() for line in file if line.strip()]
    except FileNotFoundError:
        print(f"Error: Wordlist file {wordlist_file} not found.")
        return
    except Exception as e:
        print(f"Error reading wordlist: {e}")
        return

    # Check each path in wordlist
    for path in wordlist:
        full_url, status_code = check_directory(url, path)
        if full_url:
            alive_dirs.append((full_url, status_code))
            print(f"Found: {full_url} (Status: {status_code})")
        time.sleep(delay / threads)  # Adjust delay based on threads

    return alive_dirs

# Main function to process URLs
def main():
    # Read URLs from input file
    try:
        with open(input_file, 'r') as file:
            urls = [line.strip() for line in file if line.strip()]
    except FileNotFoundError:
        print(f"Error: {input_file} not found. Please create it with alive URLs.")
        return
    except Exception as e:
        print(f"Error reading {input_file}: {e}")
        return

    # Process each URL
    for url in urls:
        if not url.startswith(('http://', 'https://')):
            url = 'http://' + url  # Default to HTTP if no protocol
        scan_directories(url)

if __name__ == "__main__":
    main()