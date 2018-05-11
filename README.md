# Code Samples

All code included in this repo is written by me. (With a little help from Magento.)

## About Add2CartUpdate

This module was created for a client with multiple websites running on the same Magento 2 instance to service their retail (B2C), wholesale (B2B), and dropship customers. The client has fairly complicated rules for its wholesale customers around the minimum quantity of any particular item that can be ordered. (For instance, one particular type of item must be purchased in increments of 3 while another type must be purchased in increments of 10.) Wholesale customers often end up with shopping carts that are dozens or hundreds of line items long. If the quantity in the cart for any particular item is not one of those increments, or if there are not enough of them in stock to meet the minimum increment threshold (i.e. they want 6 but only 5 are in stock and they must be ordered in increments of 3), an error message is displayed at the top of the cart page.

The client felt that this was a bad user experience, due to the size of some customers’ carts. They asked to implement an “Update” button that would appear next to the QTY field of a single line item if the user adjusted the quantity. This would allow the user to update the quantity of only that item, rather than submitting the whole cart at once. Upon update, the cart page would refresh and then scroll automatically to the position of the most recently updated item so that the user didn’t lose their place. Any error messages would appear at the top of the window or inline with the item, rather than at the top of the cart page where the user would have to scroll away from their current position to see what went wrong.

This module overrides the Magento cart controller and the cart item renderer to achieve this functionality. It also adds jQuery to the frontend to set cookies that store the user’s position in the cart so that the window scrolls to that item again when the page is reloaded on update. And because this module is meant only to be used on one of the websites in this Magento instance, it can be enabled and disabled per store level in the admin. 

## About CustomHeaderFooter

This was the initial task for a headless Magento 2 build. The client had an existing site/system that they were happy with, but they wanted to use Magento’s cart, checkout, and order management functionality in conjunction with the site they already had. 

Their existing site had very old PHP and rendered the HTML for the header, footer, menus, sidebars, etc. from an external functions.php file and some external stylesheets which are maintained by their dev team.

In this Magento template, the stock header and footer have been stripped from the template. A new header and footer container have been created to load the showheader() and showfooter() functions from their external PHP file and render their existing site’s header and footer inside of Magento. Custom CSS classes were added to their existing stylesheets to avoid any clashes with Magento styles.

