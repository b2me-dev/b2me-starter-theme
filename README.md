# B2Me Starter Theme
The b2me-starter-theme is based on underscores.me auto generated theme with basic files needed for a WordPress theme. It is a customized WordPress theme that contains global classes and shortcodes that follows the B2Me standards.

## Plugin Prerequisuites
- [Contact Form 7](https://wordpress.org/plugins/contact-form-7/ "Contact Form 7") or [ActiveCampaign](https://wordpress.org/plugins/activecampaign-subscription-forms/ "ActiveCampaign")
- [ACF Pro](https://www.advancedcustomfields.com/my-account/view-licenses/ "ACF Pro") - use account: lauren@b2me.marketing
- [Autoptimize](https://wordpress.org/plugins/autoptimize/ "Autoptimize")
- [Classic Editor](https://wordpress.org/plugins/classic-editor/ "Classic Editor")
- [Max Mega Menu](https://wordpress.org/plugins/megamenu/ "Max Mega Menu")
- [Simple History](https://wordpress.org/plugins/simple-history/ "Simple History")
- [Yoast SEO](https://en-au.wordpress.org/plugins/wordpress-seo/ "Yoast SEO")

## Includes
- [Google Fonts](https://fonts.google.com/ "Google Fonts")
- [Font Awesome](https://fontawesome.com/icons/ "Font Awesome")
- [Slick](https://kenwheeler.github.io/slick/ "Slick")
- [Animate on Scroll](https://michalsnik.github.io/aos/ "Animate on Scroll")

## Installation
1. Download the updated copy of the theme from https://github.com/b2me-dev/b2me-starter-theme 
2. Rename the zip file to website-name.zip (remove -main)
3. Login to your WordPress site.
4. From the Menu, select Appearance then Themes
5. Click "Add New" then "Upload Theme"
6. Click "Choose File" then select the zip file that is downloaded earlier.
7. Activate the theme.
8. Go to WordPress: ACF > Tools > Click "Import JSON" then select the JSON file that can be found at this folder (ACF/acf-export.json)
9. Update settings on WordPress: Theme Settings, Color Scheme, Social Media and Ratings

## Minor Setup

### Development Reminders
1. Go to Settings > Reading: Check the "Discourage search engines from indexing this site" option so the development site will not be indexed.
2. Go to Settings > Permalink: Select custom structure.
3. Go to Settings > Discussion
    - Uncheck: Allow people to submit comments on new posts
    - Check the following:
        - Users must be registered and logged in to comment
        - Automatically close comments on posts older than 14 days
        - Comment must be manually approved
4. On Posts, remove the example post "Hello World".

### Setup homepage
1. Go to Pages and click "Add New"
2. Title: Home, then click "Publish"
3. Once home page is created, go to Settings > Reading
4. Change "Your home page displays" to "A static page" then select the Homepage to "Home"
### Setup menu navigation
1. Go to Appearance > Menus
2. Enter your Menu Name
3. Add you menu links and dropdowns to the Menu Structure
4. Click "Save Menu"
5. After clicking save, you should be able to see a Menu Settings.
6. From the Menu Settings, select "Primary" then again, click "Save Menu"

## Development & Maintenance
Every changes and update from the starter theme should be uploaded again to the Github repository. Please follow the steps to make changes to the starter theme.
1. Download Git version 2.38.0-64-bit
2. Create a folder to clone the project
3. Open Git Bash
4. Go to the created folder by using the cd command
5. Clone the project by typing this command 
`git clone https://github.com/b2me-dev/b2me-starter-theme.git`
6. Do the necessary updates and changes the the project.
7. Then push to a new branch so it will not merge to the main branch.