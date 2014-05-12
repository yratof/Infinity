# Infinite Comic Plugin

## Changelog

### 12th May 2014 - v0.1a

- Added plugin.php and supporting files
	- Post type
	- Shortcode
	- Taxonomy

---

## Roadmap

- Create custom post type for "**story**"
	- Design a custom page for this 
		- Title
		- Featured image
		- Chapter
		- Notes
		- ~~Comments~~

- Create Taxonomies for "**Chapters**"
	- These will separate the story into sections, so when you're reading back, you can go to section X without needing to scroll to it.
	- Chapters don't dictate the order of the posts, the posts are chronological. So the post date determines the order.
	- Give taxonomies image option for Cover Art of that chapter (if it needs one).

- Cookies for chapters
	- If you accidentally scroll to the top of the page, it'll be noted that you got to **X post in X chapter**, and it provides a link to get back to that post. This is a auto-bookmark technology we're thinking about here.

- Social share the post

- Options page
	- Turn on/off *how many posts left*
	- Show pagination (recommended)
	- Disable sharing
	- Google analytics snippet(?)
	- Show titles
	- Show Chapter title pages (these can be set in the chapters image taxonomy)


---

> **Notes**
> 
> [Infinite Scrolling](http://airbnb.github.io/infinity/)


### SEO 

- Include a Sitemap of all posts.
- Use HISTORY Api to change the URL when scrolling past posts 
	- [html5 History](http://www.impressivewebs.com/html5-history-api-syntax/)
	- [Example of this working](http://scrollsample.appspot.com/items)
