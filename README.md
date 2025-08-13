# Spine-O-Well WordPress Theme

This repository contains the custom WordPress theme for Spine-O-Well, a premium orthopedic mattress company.

## Theme Installation and Setup

Because the core WordPress application is too large for this development environment, it is not included in this repository. To use this theme, you will need to perform a standard WordPress installation first.

Here are the step-by-step instructions to get your website up and running:

### Step 1: Set Up a WordPress Environment

1.  You will need a web server with PHP and MySQL. Most web hosting providers (like Bluehost, SiteGround, GoDaddy, etc.) offer easy "one-click" WordPress installation.
2.  Follow your hosting provider's instructions to set up a new, clean WordPress website.

### Step 2: Install the Spine-O-Well Theme

1.  Download the `spine-o-well` folder from this repository.
2.  Log in to your WordPress admin dashboard.
3.  Navigate to **Appearance > Themes** from the left-hand menu.
4.  Click the **"Add New"** button at the top of the page, and then click **"Upload Theme"**.
5.  Zip the `spine-o-well` folder you downloaded.
6.  Click **"Choose File"**, select the `spine-o-well.zip` file you just created, and click **"Install Now"**.
7.  Once the installation is complete, click the **"Activate"** link.

### Step 3: Configure the Theme (Recommended)

1.  **Set the Homepage:**
    *   In your WordPress dashboard, go to **Settings > Reading**.
    *   Under "Your homepage displays", select **"A static page"**.
    *   For "Homepage", select the **"Home"** page (or create a new page with that name).
    *   Save your changes.

2.  **Set up the Contact Form:**
    *   Go to **Plugins > Add New** and search for **"Contact Form 7"**.
    *   Install and activate the plugin.
    *   Go to the **"Contact"** tab in your dashboard and create a new form.
    *   Copy the shortcode for your new form (it will look like `[contact-form-7 id="..." title="..."]`).
    *   Go to **Pages > Edit** on your "Contact Us" page.
    *   Paste the shortcode into the content area. The theme is already styled to make it look great.
    *   In the Contact Form 7 settings, you will need to enter the email address where you want to receive messages.

Your Spine-O-Well website should now be live and fully configured with the custom design!
