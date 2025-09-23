def drawBox(width, height):
    print('+' + '-' * width + '+')
    for _ in range(height):
        print('|' + '.' * width + '|')
    print('+' + '-' * width + '+')
    
print(drawBox(10, 5))    
