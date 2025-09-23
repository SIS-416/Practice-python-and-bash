import random
print("welcome to hangman")

words = ["hackers", "bounty", "random"]

secret_word = random.choice(words)
print(secret_word)
print("you get % gusses")
display_word =[]
for letter in secret_word:
    display_word += "_"
print(display_word)

num = 0
game_over = False

while not game_over:
    guess = input("Gues a latter=").lower()
    for position in range(len(secret_word)):
        letter = secret_word[position]
        if letter == guess:
            display_word[position] = letter
    if guess not in secret_word:
        num += 1
        if num>=5:
          print("you loser")
          game_over = True
    print(display_word)

    if "_" not in display_word:
        print("You are win")
        game_over = True