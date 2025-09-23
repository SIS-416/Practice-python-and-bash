import requests
import socket
from urllib.parse import urlparse
import time

# Configuration
input_file = 'aon-subs.txt'  # Input file with subdomains
output_file = 'alive-aon.txt'  # Output file for alive subdomains
timeout = 5  # Timeout in seconds for HTTP requests
delay = 1    # Delay between requests to avoid rate limiting

# Function to check if a subdomain is alive
def is_alive(subdomain):
    try:
        # Convert subdomain to URL and test HTTP/HTTPS
        for protocol in ['http://', 'https://']:
            url = f"{protocol}{subdomain}"
            parsed_url = urlparse(url)
            domain = parsed_url.netloc or subdomain

            # Check if the domain resolves
            socket.gethostbyname(domain)

            # Send HTTP request
            response = requests.get(url, timeout=timeout, verify=True)
            if response.status_code == 200 or response.status_code == 301 or response.status_code == 302:
                return url
        return None
    except (requests.RequestException, socket.gaierror):
        return None

# Main function to process subdomains
def check_subdomains():
    alive_subdomains = []

    # Read subdomains from input file
    try:
        with open(input_file, 'r') as file:
            subdomains = [line.strip() for line in file if line.strip()]
    except FileNotFoundError:
        print(f"Error: {input_file} not found. Please create it with subdomains.")
        return
    except Exception as e:
        print(f"Error reading {input_file}: {e}")
        return

    # Check each subdomain
    print(f"Checking {len(subdomains)} subdomains...")
    for i, subdomain in enumerate(subdomains, 1):
        print(f"Checking {i}/{len(subdomains)}: {subdomain}")
        alive_url = is_alive(subdomain)
        if alive_url:
            alive_subdomains.append(alive_url)
        time.sleep(delay)  # Delay to avoid rate limiting

    # Save alive subdomains to output file
    try:
        with open(output_file, 'w') as file:
            for url in alive_subdomains:
                file.write(f"{url}\n")
        print(f"Found {len(alive_subdomains)} alive subdomains. Saved to {output_file}")
    except Exception as e:
        print(f"Error writing to {output_file}: {e}")

# Run the program
if __name__ == "__main__":
    check_subdomains()