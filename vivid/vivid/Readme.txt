****************************************
* Vivid v1.0 - Instruction manual          
* by Ori Pearl http://www.oripearl.com/
****************************************

This template is free. You are allowed to use it for commercial web-sites and you are
allowed to change it, but please always keep the credits link to my website in the footer
and please don't sell this template. Thank you.

In this manual I will give you instruction on how to customize this template for your needs.
This template has been tested on all modern browsers (Firefox, IE, Safari, Chrome, Opera, ...) and on different operating systems.
It is a strict XHTML 1.0 and CSS 2.1 valid template (you can try and validate it yourself).
In order to customize this template you will need very basic knowledge of HTML.

Table of contents
1. About the font in the logo and how to use it
2. How to change the main logo
3. Adding/removing menu items
4. How to add text paragraphs and images
5. How to add and customize lists
6. How to add links 
7. Adding sidebar content
8. How to add a search form
9. Changing fonts and colors


1. About the font in the logo and how to use it
*************************************************
The font used both in the logo and in the message right to the logo is Aller Sans.
This font is free for personal and business use. You can see the license agreement here: http://www.dmjx.dk/presserum/downloads/Aller_EULA.pdf
The font contains a few typefaces:
For the logo I used 60pt Aller Display
For the message on the right I used 16pt Aller
Both in the color #ef5400
So in order to create similar images, just open your favorite photo editing software and over a white background write with a text tool using the above properties.


2. How to change the main logo
*************************************************
The logo in the header is a JPG, you can put any JPG with a white background instead.
In order to change the logo image:
1. Put your new logo image in the images folder of the theme
2. Open index.html for edit
3. Find the div tag with id "header"
4. Inside it you will find an img tag with the id property set to "logo"
5. Change the src property of this tag so it will direct to your logo image
for example, if your logo image is mylogo.jpg, the full tag should be: <img src="images/mylogo.jpg" id="logo" alt="Vivid theme" />


3. Adding/removing menu items
*************************************************
The menu items are links to other pages in the web site.
To add a new link in the menu, make sure you have the name of the target file.
1. Open index.html for edit
2. Find the div tag with id "menu-strip", below it should be a <ul> element with the id "top-menu".
3. Below that element there should be <li> elements with all the links.
3. To remove a specific menu item, just delete the relevant line.
4. To add a new menu item, create a new line under one of the <li> elements (the one you want to appear before your new link).
5. Create another <li> in this format: <li><a href="target_file.html">item name</a></li>
6. Replace target_file.html with your real target file, and replace "item name" with the real name of your menu item.


4. How to add text paragraphs and images
*************************************************
The content of the main column in the web site is located in a div with the id "main-content".
In order to add a new text paragraph, add a div element with the class "block" - this div is used for spacing around your paragraph.
Inside the block div you can use all standard HTML tags:
For a big headline (the blue ones) you can use the <h1> tag e.g.: <h1>Big headline comes here</h1>
You can use all other headlines sizes: <h1> to <h6>
For a horizontal ruler (the thin grey line) use the <hr> tag.
For a paragraph of text use the <p> tag.
For bold type wrap your text with the <strong> tag.
You can also enter images using the <img> tag, if you want to insert the image file picture.jpg from the images folder just add:
<img src="images/picture.jpg" /> and you're done.
Just don't forget to close all the tags before you're done.


5. How to add and customize lists
*************************************************
Once you've added a paragraph, you can put lists in it.
In order to create an _unordered_ list, use the standard ul tag and for each list item use the li tag e.g.:
<ul>
  <li>Item 1</li>
  <li>Item 2</li>
</ul>
In order to create an _ordered_ list (with numbers), use the ol tag e.g.:
<ol>
  <li>Item 1</li>
  <li>Item 2</li>
</ol>


6. How to add links
*************************************************
In order to add a link, use the standard HTML <a> tag. You set the link target in the href property of the tag:
For example if you want to insert the text "Press here" that will link to http://www.google.com you need to add the
tag as following: <a href="http://www.google.com/">Press here</a>
You can insert links in any paragraph you would like.


7. Adding sidebar content
*************************************************
The sidebar is represented by the div with the id "sidebar".
In it you can use any standard HTML element as I explained in section 4 of this manual.
I already included in index.html a few content samples in the sidebar, so I suggest you take a look on it, it's very easy and you won't have a problem to learn from what I did.


8. How to add a search form
*************************************************
In order for you to have a search form, you must have a reference to a server function (for example a .php file) that performs the search functionality.
Once you have the needed file, this is what you need to do:
1. Choose where you want to add your search form
2. Insert this code:
	<form class="search-form" action=""> <!-- Search form -->
		<p>
			<input type="text" id="searchterm" />
			<input type="submit" value="Search" id="submitbutton" />
		</p>
	</form>
3. In the <form> element, inside the action attribute, insert the name of the file responsible for the search functionality. For example: <form class="search-form" action="search.php">


9. Changing fonts and colors
*************************************************
All the fonts and colors settings are in the CSS file css/style.css.
The chosen color for a specific element is inside that element settings and preceeded by the "color" property.
For example: The color of the normal text is set in the body section, in the "color" property. The color for the h1 tags
is set in the h1 section (search it in style.css), in the "color" property.
Background images and colors are set with the "background" property.
Fonts are set with the "font-family" property, and font sizes are set with the "font-size" property.
It's very basic CSS so I won't go into that very much since you can just take a look at style.css to see how it's done.
If you are clueless about it, try reading a short CSS tutorial, it's simple and easy to understand.


If you have any more questions regarding the HTML, CSS and PSD of this template,
feel free to contact me through my web site http://www.oripearl.com/

Enjoy.