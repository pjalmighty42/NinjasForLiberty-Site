![alt text](https://github.com/pjalmighty42/NinjasForLiberty-Site/blob/master/NFL.gif?raw=true "NinjasForLiberty Website Banner")

# NinjasForLiberty website files
___

## Synopsis
The NinjasForLiberty website was a website that I decided to join in to develop. It was as a way to fundraise for a Libertarian candidate during the last run of elections. I was able to finish the website to completetion, and afterwards was relased back into my schoolwork (at the time). The website started as a website templated and initally developed by Chase Reid.

I was told that the website itself didn't exists anymore. I presume that this is a result of funding drying up or the site was no longe needed. So I had looked through my old folders and luckily found the whole project saved up on my home desktop. So I decided to sanitize the project (remove/replace sensitive information) and post up an addition to my GitHub repositories to show potiential employers examples of my work.

I also have included this Readme as a way to help explain the whole process of turning a pure-HTML solution into a pure-PHP solution. Please feel free to read this document and feel free to check out my work!
___

## Development

At the time of development, me and Chase looked at the way the website was structured and decided that we needed to change the paradigm of how the website needed to function.

We realized that there was this "loop" where all the pages had the same header/nav and the same footer. The only things that really changed were what were in the body. So from there I took a look at Wordpress and how it functioned, and brought up the idea of spliting up the page (like Wordpress) where we made the Header and Footer a "constant", and only switched up the ody portions of the pages.
___

## Finalization

So, from this one premise, I proceeded to turn a fully-HTML solution into a fully-PHP solution.

> Then redesigning, editing, and refactoring, some 14 HTML pages into 14 PHP pages.

This included disecting the header/nav portions of the webpages and footer portions of webpages and putting them into separate, but functional, PHP files. Then redesigning, editing, and refactoring, some 14 HTML pages into 14 PHP pages. the rest of pages bodies into their own separtate PHP files. The only differences were the nifty idea of just adding:

```php

<?php requires 'header.php'; ?>

and

<?php requires 'footer.php'; ?>

```

To every page, thus giving every page into a Header > Body > Footer structure.

> ...thus giving every page into a Header > Body > Footer structure.
___

# Tecnhology Stack used

The technology stack included:
- HTML5
- CSS3
- PHP
- Javascript
- JQuery
- Zurb Foundation
- Google API (for maps and calendar functionality)
