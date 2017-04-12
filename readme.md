Web Developer Applicant Exercise
================================

We've put together a rough-and-ready demo of a blog aggregator app. It gathers posts from our blog network using our JSON API and displays them on a single page.

We would like you to take this demo application and convert it into something you'd be happy to put into production. 

Required features:

* Use the three feeds from the demo application to produce a combined listing
* Allow a user to view an article
* Allow users to sort by date
* Allow users to filter by blog
* Include some styling to ensure a decent user experience
* Render appropriately across a range of devices and browsers (IE9+), considering accessibility

Feel free to use our demo as a starting point (or throw it away and start again!). Feel free to use any libraries and frameworks or none at all. If you choose to use version control, please provide your .git directory or a change log.

Please email your sample application to is-webdev@kent.ac.uk and M.McCartney-989@kent.ac.uk as a zip along with a paragraph or two explaining your design and development decisions.


## Blogs API Overview

### APIs endpoints needed for this project

	https://api.kent.ac.uk/api/v1/blogs/kbs-news-events/posts_per_page/5
	https://api.kent.ac.uk/api/v1/blogs/music-matters/posts_per_page/5
	https://api.kent.ac.uk/api/v1/blogs/staff-student-news/posts_per_page/5

### Request structure

	/v1/blogs/@blog/@filters

 * `@blog` - blog identifier
 * `@filters` - blog filters

Available filters include `categories`, `tags`, `academics`, `schools`, `author`, `page`, `posts_per_page`, `ids`, `offset` ... in the format: `/v1/blogs/@blog/categories/5,3/tags/1`

Where a filter takes multiple values, separate them with a `,`. E.g `https://api.kent.ac.uk/api/v1/blogs/staff-student-news/posts_per_page/20/categories/campus-online,medway-student`

#### Single blog item

	/v1/blogs/@blog/@id

 * `@blog` - blog identifier
 * `@id` - blog post ID
