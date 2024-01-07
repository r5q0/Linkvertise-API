# Linkversite API

This is a simple PHP function that generates a Linkvertise URL for a given input URL. Linkvertise is a platform that allows you to monetize your links by displaying ads before redirecting users to the original URL.

## How it works

The `getUrl` function takes a URL as input and returns a Linkvertise URL. It does the following steps:

1. Encodes the input URL using base64 encoding.
2. Constructs the Linkvertise URL by appending the encoded URL as a query parameter.
3. Returns the Linkvertise URL.

## Usage

1. Include the `index.php` file in your project.