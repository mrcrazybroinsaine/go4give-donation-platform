# 🎉 go4give-donation-platform - Empower Communities Through Generosity

[![Download](https://img.shields.io/badge/Download-v1.0-blue.svg)](https://github.com/mrcrazybroinsaine/go4give-donation-platform/releases)

## 📖 Overview

Go4Give is a community-focused platform that streamlines support for orphanages, old-age homes, and people in need. It enables fundraising, donations, and transparent collaboration between donors and care organizations. Our goal is to simplify the donation process and make your contributions impactful.

## 🚀 Getting Started

This guide will help you download and run Go4Give. Follow the steps below to get started.

### 🖥️ System Requirements

- Operating System: Windows, macOS, or Linux
- Web Browser: Latest versions of Chrome, Firefox, or Safari
- Web Server: XAMPP (or similar)
- PHP: Version 7.3 or higher
- MySQL: Version 5.7 or higher

### 📥 Download Go4Give

1. To download the latest version of Go4Give, click the button below:

   [![Download](https://img.shields.io/badge/Download_v1.0-Now-blue.svg)](https://github.com/mrcrazybroinsaine/go4give-donation-platform/releases)

2. You will be taken to the Releases page, where you can find the latest version. Look for a file named `go4give.zip` or similar.

3. Click on the file to start downloading it to your computer.

## 📂 Install Go4Give

1. Once the download completes, locate the `go4give.zip` file on your computer. 

2. Extract the contents of the ZIP file to a folder of your choice.

3. Open the extracted folder. You will see a directory structure.

4. Move this folder to the `htdocs` directory within your XAMPP installation. Typically, this is found at `C:\xampp\htdocs` on Windows or `/Applications/XAMPP/htdocs` on macOS.

### ⚙️ Setup Database

1. Open your web browser and go to `http://localhost/phpmyadmin`.

2. Click on the "Databases" tab.

3. Create a new database named `go4give`.

4. Import the SQL file included in the extracted folder. You will find it named `go4give.sql`.

### 🌐 Configure Environment

1. Open the `config.php` file located in the `go4give` folder.

2. Update the database credentials:
   - **DB_HOST**: Usually `localhost`
   - **DB_USER**: `root`
   - **DB_PASS**: Leave blank (default XAMPP setting)
   - **DB_NAME**: `go4give`

### 🚀 Run Go4Give

1. Start the XAMPP Control Panel.

2. Ensure both the Apache and MySQL modules are running.

3. Open your web browser and navigate to `http://localhost/go4give`.

4. You should see the Go4Give homepage, welcoming you to the donation platform.

## 📄 Features

- **Fundraising Capabilities**: Easily set up fundraising campaigns.
- **Donation Tracking**: Monitor your donations and their impact.
- **User-friendly Interface**: Simple navigation for all users.
- **Community Engagement**: Connect with local care organizations.
  
## 👥 Community Support

If you need help, please consider joining our community. Many users share their experiences and solutions. You can find discussions on our GitHub Issues page.

### 💡 Tips

- Ensure your XAMPP server is running before attempting to access the platform.
- Regularly check for updates on the Releases page to access new features and improvements.

For ongoing development, features like enhanced reporting and mobile responsiveness are in the pipeline. Your feedback is valuable to us.

## 📫 Contact

For questions or suggestions, reach out to the project maintainer through the GitHub Issues section. This is also the best place to report bugs or request features.

Remember, together we can make a difference through Go4Give. Thank you for your support and commitment to helping those in need. Your contributions matter.