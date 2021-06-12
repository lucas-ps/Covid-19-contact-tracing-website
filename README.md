# Covid-19 contact tracing website

My (partially working) web development project for a Covid-19 contact tracing website. Unfinished as of right now as I didn't have time to finish it completely before the deadline and have been busy with other work since then. The HTML and CSS are finished but much of the PHP is not working as of right now. 


## Progress

### HTML
- All pages were implemented as expected and look similar if not identical to the screenshots provided

### CSS
- Page styling has been implemented as expected with most pages looking identical to screenshots provided and using the correct fonts. The watermark has also been correctly placed and colours have been checked

### PHP
- PHP has been tested to work for:
  - Registration
  - Logging in
  - Creating overview
  - Changing settings

- Not implemented yet:
  - Check infection
  - Report infection
  - Add new visit

### Secure sessions and cookies 
 - Cookies were used to store all user data and were cleared when the logout.php page was run

### JavaScipt
- Javascript was completed for removing a location from the overview (not from the json file though) and for extracting location data from clicks on the map.
### Ajax
- Ajax functionality was not completed on time and therefore hasn't been included here.

### Web Service
- The web service was used to check for new infections and add them to the JSON file, however I did not complete reporting infections.

### Security
- Used password_hash and password_verify for passwords, salt is automatically added by these methods.
- No SQL was used so SQL injection cannot happen.

## License
[MIT](https://choosealicense.com/licenses/mit/)
