# AI Agent Instructions for Wbt-Fall-2025-26 Project

## Project Overview
This is a portfolio website project with a simple and clean structure. The project is organized into distinct sections for HTML, CSS, JavaScript, and data assets.

## Project Structure
```
Protfolio/
├── CSS/         # Styling files
├── DATA/        # Asset files and data resources
│   ├── Mc/     # Media content
│   └── School/ # School-related data
├── HTML/        # HTML pages
│   ├── index.html      # Main landing page
│   ├── education.html  # Education details
│   ├── exprience.html # Experience information
│   └── contactme.html # Contact information
└── JS/          # JavaScript functionality
```

## Key Patterns and Conventions

### HTML Structure
- Pages follow a consistent structure with centered content
- Navigation is handled through simple unordered lists with anchor tags
- Images are stored in the `DATA` directory and referenced using relative paths
- Example from `index.html`:
  ```html
  <img src="../DATA/My_Photo.jpg" alt="Picture" width="200" height="200">
  ```

### File Organization
- All HTML files are kept in the `HTML` directory
- Media assets are organized in the `DATA` directory
- Styles are separated into the `CSS` directory
- JavaScript functionality is isolated in the `JS` directory

### Navigation Pattern
- Inter-page navigation uses relative paths
- Links are consistently structured in unordered lists
- Example:
  ```html
  <ul>
      <li><a href="./education.html">Education</a></li>
      <li><a href="./exprience.html">Exprience</a></li>
      <li><a href="./contactme.html">contactme</a></li>
  </ul>
  ```

## Important Development Guidelines
1. Maintain the existing directory structure when adding new files
2. Use relative paths for all internal links and assets
3. Keep content centered using the `<center>` tag as per existing pattern
4. Follow the established naming conventions (lowercase for directories, standard naming for HTML files)

## Key Files
- `HTML/index.html`: Main entry point and portfolio landing page
- `HTML/education.html`: Educational background information
- `HTML/exprience.html`: Professional experience details
- `HTML/contactme.html`: Contact information and forms