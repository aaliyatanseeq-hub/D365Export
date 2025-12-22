# ExportD365 PHP Application

A PHP application for exporting data from Dynamics 365.

## Project Structure

```
your-php-app/
│
├── public/
│     ├── test.php
│     ├── export.php   (to be implemented)
│
├── src/
│     └── (PHP logic to be added)
│
├── composer.json
└── README.md
```

## Setup

1. Install dependencies (if any):
   ```bash
   composer install
   ```

2. Configure your web server to point to the `public/` directory as the document root.

3. Test the application by accessing `test.php` in your browser.

## Development

- Public-facing files go in `public/`
- Application logic goes in `src/`
- Use PSR-4 autoloading for classes in `src/`

