# README: Tegro Landing Page Configuration

## Introduction

This comprehensive README is designed for the Tegro team. It contains a detailed guide on configuring the `.htaccess` file for the project's landing page, enhancing security, and optimizing user experience.

## .htaccess Configuration

### Enhancing Cookie Security

```apache
# Implement secure cookies
# Header set Set-Cookie HttpOnly;Secure
Header always edit Set-Cookie (.*) "$1; HTTPOnly; Secure"
```
This configuration enforces the `HttpOnly` and `Secure` flags for all cookies, increasing security by restricting JavaScript access and ensuring transmission over encrypted connections.

#### Protecting Hidden Files

```apache
# Secure .htaccess and other hidden files
<Files ~ "^\.">
    Order allow,deny
    Deny from all
</Files>
```
This block safeguards hidden files, like `.htaccess`, adding an extra layer of security against unauthorized access.

#### URL Rewrite Mechanism

```apache
# Activate URL rewriting
RewriteEngine on
```
Enabling the`mod_rewrite` module facilitates URL redirections and modifications for improved navigation and SEO.

#### Streamlining URL Structure

```apache
# Redirect .php URLs to cleaner versions
RewriteCond %{THE_REQUEST} ^[A-Z]{3,}\s([^.]+)\.php [NC]
RewriteRule ^ %1/ [R=301,L]

# Remove .php extension, add trailing slash
RewriteCond %{REQUEST_FILENAME} !-d
RewriteCond %{REQUEST_FILENAME}\.php -f
RewriteRule ^([^\.]+)/$ $1.php
```

These rules are aimed at removing the `.php` extension from URLs and appending a trailing slash, thereby simplifying the URLs for better user experience.

#### Optimizing URLs for Brand Consistency

```apache
# Exclude "www" from URLs, redirect to non-www version
RewriteCond %{HTTP_HOST} ^www\.(.*)$ [NC]
RewriteRule ^(.*)$ https://%1/$1 [R=301,L]
```

Removing `www` from URLs ensures brand consistency and enhances SEO performance.

Intelligent 404 Error Handling

```apache
# Smart redirection for non-existent pages
RewriteCond %{REQUEST_FILENAME} !-f
RewriteCond %{REQUEST_FILENAME} !-d
RewriteRule . / [L,R=301]
```

This setup redirects users to the homepage when they attempt to access pages that don't exist, offering a seamless user experience while maintaining site engagement.

#### Comprehensive Additional Configurations

Besides the main configurations, the .htaccess file includes additional settings such as cache headers, file compression activation for specific file types, and other performance-enhancing features.

### Conclusion

The `.htaccess` file is an essential component for configuring the server behavior and setting up the landing page. This README serves as an in-depth guide for the Tegro team, assisting in understanding, implementing, and modifying configurations for optimal site performance and security.
