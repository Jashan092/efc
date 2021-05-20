# We have 2 options to scrape a website:
# 1. by using website API.
# 2. HTML web scraping using some tool like bs4.

# install all the requirements

# sudo pip3 install requests
# sudo pip3 install bs4 
# sudo pip3 install html5lib
import requests
from bs4 import BeautifulSoup
url = "https://www.codewithharry.com"

# Step 1 ---> Get the HTML
r = requests.get(url)
htmlContent = r.content
# print(htmlContent)


# Step 2 ---> Parse the HTML
# creating the soup
soup = BeautifulSoup(htmlContent,'html.parser')   #  IT will 
# print(soup.prettify)   # print the html tree


# Step 3 ---> HTML Tree Traversal
# commonly used types of objects 
# 1. Tag 
# 2, Navigable String
# 3. BeautifulSoup 
# 4. Comment
# There are many objects these 4 are common
# Get the title of the HTML page
title = soup.title
# print(title)

# Get all the paragraphs 
paras = soup.find_all('p')
# print(paras)

# For getting all the anchor tags 
anchors = soup.find_all("a")     # print all the anchor tags of DOM 

# print(anchors)

# for getting first resuly 
firstp = soup.find('p')['class']     # IT will give the classes that are in first paragraph tag
# firstp = soup.find('p')['id']     # IT will give the id of the element  
# print(firstp)     # IT will print the first paragraph
    
# find all the elements with class lead 
# print(soup.find_all("p",class_ = "lead"))    # It will print all the elemetns with class lead

# For getting the text from tags/soup
# print(soup.find("p").get_text())     # It will prit the text that is in the tag
  
# # Get all the links on the page   
# for link in anchors:
#     print(link.get('href'))

# for not getting pound symbol and repeated links we can use this 
all_links = set()
for links in anchors:
    if (links.get('href')!= '#'):
        all_links.add("https://www.codewithharry.com" + links.get('href'))
print(all_links)


markup = "<p><!-- This is Comment --> </p>"
soup2 = BeautifulSoup(markup)
# print(type(soup2.p.string))  # It will print Beautifulsoup.comment

navbarSupportedContent = soup.find(id='navbarSupportedContent')
# print(navbarSupportedContent.childern)
# so, what is the difference between contents and children 
# for elem in navbarSupportedContent.childern:
#     print(elem)
#     # it will print the same
# for elem in navbarSupportedContent.contents:
#     print(elem)

# for item in navbarSupportedContent.strings:
#     print(item)   # IT will print the strings that are in navbarSupportedContent

# for item in navbarSupportedContent.stripped_strings:
#     print(item)   # It will cut the spaces 

print(navbarSupportedContent.parent)  # It will print the parent of navbarSupportedContent
# for knowing all the parents 
for item in navbarSupportedContent.parents:
    print(item.name)

# Next cilbling and previous cibling
# print(navbarSupportedContent.next_sibling)
print(navbarSupportedContent.previous_sibling.previous_sibling)

# Selectors
# elem = soup.select("#loginModal")
elem = soup.select(".modal-footer")
print(elem)
