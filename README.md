
# Random Pattern

__A fun project to demonstrate an idea__

I saw [this
tweet](https://twitter.com/elazar/status/1382026596635316225) from
[Matthew Turland](https://matthewturland.com/), and I had an idea on how
I might solve this problem. Initially, I was tempted to type all the
characters I want into one big array, and pick a randomly chosen
character from it.  Loop over that N times, and your done. But then I
had a different idea.  What if you choose which randomized characgters
get selected according a to simple pattern? This sounded more
interesting to me. You could get creative with this. However, long or
short the pattern is up to you.

There are 3 types of characters

* Alphabetic
* Clarified alphabetic
* Digits

The **alphabetic** composed the uppercase letters of the English alphabet.
Lowercase letters are *not* currently used.  The **clarified** alphabet
removes some commonly misread characters. The digits are the number 0
through 9.

## Example Patterns

4 alphabetic characters

```php
$pattern = 'AAAA';

// $result = 'BZSI'
```

3 digits

```php
$pattern = 'DDD';

// $result = '392'
```

5 Clarified alphabetic characters

```php
$pattern = 'CCCCC';

// $result = CXTFR
```

2 Alphabetic, 3 digits, 2 Clarified alphabetic characters

```php
$pattern = 'AADDDCC';

// $result = 'SB502JQ'
```




## Version

The current version is 0.1.0. This project uses [semantic versioning](http://semver.org).



## Resources

* [Semantic Versioning](http://semver.org)
* [GitHub Markdown](https://help.github.com/categories/writing-on-github/)
* [Contributing Guidelines](https://help.github.com/articles/setting-guidelines-for-repository-contributors/)
* [Changelog](docs/CHANGELOG.md)
* [Humans TXT](http://humanstxt.org/) 
* [Robots TXT](http://www.robotstxt.org/) 
* [Git Ignore Generator](https://www.gitignore.io/)
* [Open Source Licenses](http://opensource.org/licenses/GPL-3.0)



## Credits and Acknowledgments

* Project Creator:  [Andrew Woods](https://andrewwoods.net)

