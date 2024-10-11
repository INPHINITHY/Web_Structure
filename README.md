# 🌐 **Website Project Structure**

This repository outlines a clean and efficient structure for organizing your web project. By following this guide, you’ll avoid unexpected errors and maintain a scalable and manageable codebase.

## 🎯 **Quick Overview**

- Your `index.php` should live at the root directory alongside key folders.
- The **`includes/`** directory will house reusable files like `header.php` and `footer.php`, used across all pages.
- Every other page should be neatly placed in the appropriate directory to maintain clarity and organization.

## 🗂️ **Folder Structure**

Here’s the recommended project layout to keep everything tidy and scalable:

```
project-root/
│
├── assets/
│   ├── css/
│   │   └── style.css       # Main stylesheet
│   │   └── other.css       # Additional CSS files
│   ├── images/
│   │   └── logo.png        # Website logo and other images
│   └── js/
│       └── script.js       # Custom JavaScript
│
├── includes/
│   ├── header.php          # Reusable site header
│   ├── footer.php          # Reusable site footer
│   └── database.php        # Database connection file
│
├── pages/
│   ├── home.php            # Homepage
│   ├── about.php           # About us page
│   └── contact.php         # Contact form page
│
├── templates/
│   ├── page-template.php   # Template for general pages
│   └── form-template.php   # Template for forms
│
├── index.php               # Main entry point of your website
└── .env                    # Environment configuration
```

## 🚀 **How to Get Started**

1. **Organize Your Files**:
   - Keep `index.php` at the root of your project. It will be the landing page.
   - Store reusable components like headers and footers inside the `includes/` folder.
   - Pages that users will interact with, such as `about.php`, should reside in the `pages/` directory.
   - Use the `templates/` folder for layouts and forms that can be reused across different parts of the site.

2. **Avoid Common Pitfalls**:
   - Ensure the folder structure remains consistent to prevent broken links and unexpected errors.
   - Refer to `header.php` and `footer.php` across multiple pages to streamline your site management.
   - Use `database.php` in the `includes/` folder for database connections, keeping your logic separate from presentation.


## 🔍 **Reference Example Pages**

- **index.php**: This is the core of your site and will reference the reusable files (header, footer, etc.).
- **example.php**: Check the structure of this page to see how it connects with the `includes/` folder components.

