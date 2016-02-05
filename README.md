Created a quick plugin that redirects non-logged in users (like Robots). This comes about as a response to dumb Google Robots indexing dev sites that rank higher than the actual sites.


To start, simple activate the plugin. Then set the redirect URL to the desired site. 

To show a client we have three options:

  1. Deactivate the plugin
  2. Provide them log in
  3. Give then the dev URL with ?d4=1 at the end. ( i.e. working example : http://sarg.d4webdev.com/?d4=1 )

There is a jQuery script in the plugin that appends "?d4=1" to all links. Which carries on full viewing of the site for clients to browse, and is completely harmless if gets appended to external URLs
