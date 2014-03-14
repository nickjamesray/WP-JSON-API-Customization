wp-json-api-custom
==================

Example files for customizing the JSON API plugin for WordPress. Code should go in active theme folder. Note that if you change the filename from dmskills.php to anything else, you'll need to reflect that in the rest of the code and instructions.

Steps:

1. Download the functions.php and dmskills.php files.
2. Place them inside your active theme folder (or paste in the code from this functions.php into yours).
3. With the JSON API plugin active, go to Settings->JSON API and click on "Activate" underneath "dmskills."
4. You can now write custom methods in the JSON API class inside of dmskills.php.
5. In brief, you create and return an array with the function.

Posting Data/Custom Params:

If you declare $json_api as a global in one of your methods, you can use parameters sent in the URL request.

Example (not a working link): http://example.com/api/dmskills/user_record/?id=24

Inside public function "user_record" if you write "global $json_api" you can access the id as $json_api->query->id.

Additional information:
https://vimeo.com/48773789

Enjoy!
