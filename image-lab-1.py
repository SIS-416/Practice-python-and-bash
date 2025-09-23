import os
from PIL import Image
import matplotlib.pyplot as plt

folder_path = 'Forest images'

image_files = [f for f in os.listdir(folder_path) if f.lower().endswith(('.png', '.jpg', '.jpeg'))]

for img_name in image_files:
    img_path = os.path.join(folder_path, img_name)
    image = Image.open(img_path)

    plt.imshow(image)
    plt.title(img_name)
    plt.axis('off')  
    plt.show()
