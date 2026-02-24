---

# 📧 EmailQuoteFormatter

A lightweight PHP utility to clean, normalize, and format multiline email input into a SQL-ready quoted list.

This tool is designed for developers who need to quickly sanitize and prepare email data for database queries, migrations, admin tools, or debugging purposes.

---

## ✨ Features

* Trim leading and trailing whitespace
* Remove empty lines
* Normalize email casing (optional)
* Remove duplicate emails (optional)
* Generate SQL-style quoted output
* Lightweight and dependency-free

---

## 📥 Example Input

```
abc@icloud.com 
Jos@gmail.com 
tat@gmail.com
1m@gmail.com
```

---

## 📤 Example Output

```
'abc@icloud.com',
'jos@gmail.com',
'tat@gmail.com',
'1m@gmail.com'
```

---

## 🚀 Installation

No installation required.

* Works with PHP 7.4+
* Compatible with Laravel or plain PHP projects

Simply copy the function or class into your project.

---



Includes:

* Lowercase normalization
* Duplicate removal
* Email validation

---
### Usage
```php
echo EmailListFormatter::format($input);
```

---

## 📌 Use Cases

* Preparing `WHERE IN` SQL queries
* Bulk database cleanup
* Email campaign preparation
* Data migration scripts
* Admin panel utilities
* Debugging and raw SQL testing

---

## ⚠ Security Notes

* Avoid injecting formatted strings directly into raw SQL.
* Prefer prepared statements or Laravel Query Builder.
* Always validate email input in production environments.

---

## 📄 License

This project is open-source and free to use for personal and commercial projects.

---
