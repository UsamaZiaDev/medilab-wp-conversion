# Medilab WordPress Theme Conversion

This is a practice project where I converted the **Medilab** Bootstrap template into a dynamic WordPress theme. The goal of this project is to learn and apply theme development concepts, use modern WordPress tools, and build a fully functional theme for my portfolio.

## 🚀 Features
- **Dynamic Content:** Integrated with **ACF (Advanced Custom Fields)** to manage content dynamically.
- **Required Plugins:** Uses **TGM Plugin Activation** to manage and require essential plugins.
- **ACF JSON Support:** Stores and loads ACF field groups from a JSON file for portability.
- **Responsive Design:** Based on the **Bootstrap framework** for mobile-first, responsive layouts.
- **Clean Code & Structure:** Organized code with clear folder structures for easy maintenance.

## 🛠️ Tools & Technologies
- WordPress
- ACF (Advanced Custom Fields)
- TGM Plugin Activation
- Contact Form 7
- Bootstrap
- HTML, CSS, JavaScript, PHP

## 📂 Installation
1. Clone this repository:
   ```bash
   git clone https://github.com/UsamaZiaDev/medilab-wp-conversion.git
   ```
2. Copy the folder to your WordPress **themes** directory.
3. Activate the theme from the WordPress **admin panel**.
4. Install required plugins using **TGM Plugin Activation**:
   - Advanced Custom Fields (ACF)
   - Contact Form 7
5. Ensure that ACF is activated, as the theme uses **ACF JSON** for custom fields.
6. Import the required content or add new posts/pages.

## 📂 ACF JSON Usage
This theme includes an **acf-json** folder inside the theme directory. This feature allows ACF to automatically load field groups without requiring manual import.

- **Location:** `wp-content/themes/medilab-wp-conversion/acf-json/`
- **How It Works:**
  - ACF automatically scans this folder for JSON files and loads the custom fields.
  - Any changes made in ACF will be saved in this folder, ensuring portability across installations.
  - No need to manually import/export field groups in the ACF settings.

- ### 📄 ACF JSON Usage  
 ![Add ACF JSON File](https://github.com/user-attachments/assets/b23fb6a5-6b07-431a-b38d-60c9070d1c75)


## 📘 License
This project uses the **Medilab** template by **BootstrapMade**, which is free for personal use with proper attribution. This conversion is for **learning and portfolio purposes only** — not for commercial use.

Template URL: [Medilab Template](https://bootstrapmade.com/medilab-free-medical-bootstrap-theme/)

## 👨‍💻 Author
**Usama Zia**  
[Portfolio](https://usamazia.dev) 🚀  
[GitHub Profile](https://github.com/UsamaZiaDev)

