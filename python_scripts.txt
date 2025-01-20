 ,ggggggggggg,
dP"""88""""""Y8,        I8   ,dPYb,
Yb,  88      `8b        I8   IP'`Yb
 `"  88      ,8P     88888888I8  8I
     88aaaad8P"         I8   I8  8'
     88"""""gg     gg   I8   I8 dPgg,     ,ggggg,    ,ggg,,ggg,
     88     I8     8I   I8   I8dP" "8I   dP"  "Y8ggg,8" "8P" "8,
     88     I8,   ,8I  ,I8,  I8P    I8  i8'    ,8I  I8   8I   8I
     88    ,d8b, ,d8I ,d88b,,d8     I8,,d8,   ,d8' ,dP   8I   Yb,
     88    P""Y88P"8888P""Y888P     `Y8P"Y8888P"   8P'   8I   `Y8
                 ,d8I'
               ,dP'8I
              ,8"  8I
              I8   8I
              `8, ,8I
               `Y8P"

#############_____________#############_____________##############

#test python
print("Hello World")

############

# Open the file in write mode
file = open("output.html", "w")

# Write HTML content
file.write("<html>")
file.write("<head>")
file.write("<title>My Webpage</title>")
file.write("</head>")
file.write("<body>")
file.write("<h1>Welcome to my webpage!</h1>")
file.write("</body>")
file.write("</html>")

# Close the file
file.close()

print("HTML file successfully written.")

#############

# Creates a unique, 6 digit, alpha numeric code 
import random

rnd = random.randint(0, 25)
letterList = ['a', 'b', 'c', 'd', 'e', 'f', 'g', 'h', 'i', 'j', 'k', 'l', 'm', \
              'n', 'o', 'p', 'q', 'r', 's', 't', 'u', 'v', 'w', 'x', 'y', 'z']

print(letterList[rnd] + letterList[random.randint(0, 25)] + \
      letterList[random.randint(0, 25)] + '-' + str(random.randint(0, 999)))

############

#! python3
import re
import pyperclip

# Create a regex for phone numbers
phoneRegex = re.compile(r'''
# 444-444-5555, 444-5555, (444) 555-5555, 555-0000 ext 12345, ext. 12345, x12345
(
((\d\d\d)|(\(\d\d\d)))?        # area code optional
(\s|-)        # first separator
\d\d\d        # first 3 digits
-              # sparator
\d\d\d\d        # last 4 digits
(((ext(\.)?\s)|x)           # extension word part (optional)
(\d{2,5}))?                   # extension number part (optional)
)
''', re.VERBOSE)

# Create a regex for email addresses
emailRegex = re.compile(r'''
# some.+_thing@(\d{2,5}))?.com

[a-zA-Z0-9_.+]+    # name part
@                  # @ symbol
[a-zA-Z0-9_.+]+    # domain name part
''', re.VERBOSE)

# Get the text off the clipboard
text = pyperclip.paste()

# TODO: Extract the email/phone from this text
extractedPhone = phoneRegex.findall(text)
extractedEmail = emailRegex.findall(text)

print(extractedPhone)
print(extractedEmail)

# TODO: Copy the extracted email/phone to the clipboard

##############

print("Last liner")

#############
