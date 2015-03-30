SCEE Tech Task 1
================

## Set Up
- Requires PHP to view test

## Explanation
- To make the page responsive I used Twitter Bootstrap v3.3.4. Twitter Bootstrap adopts a mobile-first design that can be implemented for faster website development and is compatible with most browsers.

- I added the hero.jpg as a background responsive image that aligns to the right on smaller devices, so the boy's reaction is still visible.

- I added 3 responsive columns with different heights for the white staggered effect overlaying the image.

- The middle column contains the page copy and is designed to respond to small devices (xs <768px); with the console image on top followed by the text below. 

- Appropriate css styles applied to each copy section.

- defined variable $userLocale to read the browser's accepted language.

- Created function getLanguage() to 1) Hold an array of accepted languages, 2) Look for the full locale which includes both language and Country (e.g. en-GB) and return this language, 3) If not found then search for a back-up/shorter locale which includes just language (e.g. en), as this will more likely be closest to the users required language, 4) If not found then default to en.

- Use the returned language from getLanguage() to include the appropriate language file from /lang/. Each language file includes the website copy in array format, in the appropriate lanuage.

- Echo each copy section from the language file into the appropriate sections in the second bootsrap column.


## Roadmap
With more time I would then:

- Add functionality to detect language using the user ip address and then using this in combination with the browser accepted language to improve accuracy.

- Allow the user to choose a language by adding a dropdown button on screen.

- Save the user language selection as a cookie for future sessions.

- Yaml for language rather than array for easier amends of the language copy.

- Because of the straightforwardness of the test I chose not to demonstrate OOP, however if requested I could have created a language class which had a constructor that accepted the browser locale. Within the constructor I would have loaded the correct language file (set as a property) and then had a method called t() (short for translate) that would have translated the text.
