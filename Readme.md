# TYPO3 extension getenv_modifier

This extension provides a new value modifier `:= getEnv()` for
TypoScript syntax that reads environment variables
into TypoScript values.

## Installation

### Composer

```bash
composer require undkonsorten/typo3-getenv-modifier
```

### TER (TYPO3 Extension Repository)

Just import extension `getenv_modifier` in Extension Manager.

### Git
```bash
# cd to typo3conf/ext 
git clone https://github.com/undkonsorten/typo3-getenv-modifier.git getenv_modifier
```

## Usage

Can be used in constants, setup and TSConfig
(suggested usage in constants):

```typo3_typoscript
myConstant = defaultValue

# myConstant will be overridden if env var is defined at all.
# Empty env vars will override, too!
myConstant := getEnv(TYPO3_MY_CONSTANT)
```

Be sure to clear caches for changes in environment
to take effect.
