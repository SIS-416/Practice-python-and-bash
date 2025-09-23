import cv2
import os


input_folder = 'Forest images'
output_folder = 'binary_images'

os.makedirs(output_folder, exist_ok=True)

threshold_value = 128


for filename in os.listdir(input_folder):
    if filename.lower().endswith(('.jpg', '.jpeg', '.png', '.bmp')):
        input_path = os.path.join(input_folder, filename)
        output_path = os.path.join(output_folder, f'binary_{filename}')

        
        image = cv2.imread(input_path, cv2.IMREAD_GRAYSCALE)

       
        _, binary_image = cv2.threshold(image, threshold_value, 255, cv2.THRESH_BINARY)

        
        cv2.imwrite(output_path, binary_image)

        
print("✅ All grayscale images have been converted to binary and saved.")
