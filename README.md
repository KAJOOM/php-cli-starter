<h1 align="center">PHP CLI Example</h1>

<p align="center">A simple PHP command-line tool starter.</p>

<p align="center">
    <img alt="Preview" src="/assets/preview.png">
	<p align="center">
		<a href="https://github.com/kajoom/php-cli-starter/actions"><img alt="Build Status" src="https://github.com/kajoom/php-cli-starter/workflows/CI/badge.svg"></a>
		<a href="//packagist.org/packages/kajoom/php-cli-starter"><img alt="Latest Stable Version" src="https://poser.pugx.org/kajoom/php-cli-starter/v"></a>
		<a href="//packagist.org/packages/kajoom/php-cli-starter"><img alt="License" src="https://poser.pugx.org/kajoom/php-cli-starter/license"></a>
	</p>
</p>

## Install

This CLI application is a small game written in PHP and is installed using [Composer](https://getcomposer.org):

```
composer global require kajoom/php-cli-starter
```

Make sure the `~/.config/composer/vendor/bin` or `~/.composer/vendor/bin` directory is in your system's `PATH`.

<details>
<summary>Show me how</summary>

If it's not already there, add the following line to your Bash configuration file (usually `~/.bash_profile`, `~/.bashrc`, `~/.zshrc`, etc.):

```
export PATH=~/.config/composer/vendor/bin:$PATH
```

If the file doesn't exist, create it.

Run the following command on the file you've just updated for the change to take effect:

```
source ~/.bash_profile
```
</details>

## Use

All you need to do is call the `phpclistarter` command to start the game:

```
phpclistarter play
```

## Update

```
composer global update webmarka/php-cli-starter
```

## Delete

```
composer global remove webmarka/php-cli-starter
```
