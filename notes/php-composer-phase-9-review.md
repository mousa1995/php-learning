# Composer & PHP Autoloading — Quick Review Notes

## 1. Composer

**Composer is a dependency manager for PHP.**

It manages external packages, their versions, dependencies, dependency resolution, installation, and autoloading.

```text
Your Project
    ↓
Dependencies
    ↓
Composer
    ↓
Download / Install / Manage
```

Composer is not just a downloader; it is a **dependency manager**.

---

## 2. Why Composer?

A project may need packages that themselves need other packages:

```text
Your Project
├── Package A
│   ├── Dependency D
│   └── Dependency E
├── Package B
│   └── Dependency F
└── Package C
```

Composer manages this dependency tree.

---

## 3. `composer.json`

`composer.json` defines project dependencies and Composer configuration.

```json
{
  "require": {
    "monolog/monolog": "^3.0"
  }
}
```

This means the project needs `monolog/monolog` with a version compatible with `^3.0`.

### Package naming

Packages normally use:

```text
vendor/package
```

Example:

```text
monolog/monolog
guzzlehttp/guzzle
```

---

## 4. Multiple Dependencies

```json
{
  "require": {
    "monolog/monolog": "^3.0",
    "guzzlehttp/guzzle": "^7.0"
  }
}
```

This project has two **direct dependencies**.

Each dependency can have dependencies of its own.

```text
Your Project
├── monolog/monolog
│   ├── Dependency A
│   └── Dependency B
└── guzzlehttp/guzzle
    └── Dependency C
```

---

## 5. `composer install`

Use:

```bash
composer install
```

Short form:

```bash
composer i
```

When `composer.lock` exists, Composer installs the versions recorded there.

Typical workflow:

```text
git clone
    ↓
composer.json
composer.lock
    ↓
composer install
    ↓
vendor/
```

---

## 6. `composer require`

Use this when adding a new dependency:

```bash
composer require guzzlehttp/guzzle
```

Composer normally:

1. Adds the package to `composer.json`
2. Resolves dependencies
3. Updates `composer.lock`
4. Installs the package into `vendor/`

Difference:

```text
composer install
    → Install existing dependencies

composer require package/name
    → Add a new dependency and install it
```

You normally do not need to manually edit `composer.json` to add a package.

---

## 7. `composer.lock`

`composer.json` describes dependency requirements and version constraints.

For example:

```json
"monolog/monolog": "^3.0"
```

This does not necessarily mean exactly `3.0.0`.

`composer.lock` records the **specific versions that Composer resolved**.

Mental model:

```text
composer.json
    ↓
"What dependencies and version constraints are required?"

composer.lock
    ↓
"Which exact versions were resolved?"

vendor/
    ↓
"The installed dependency files"
```

The lock file helps make environments reproducible.

---

## 8. `vendor/`

Installed Composer dependencies normally live in:

```text
vendor/
```

Example:

```text
project/
├── composer.json
├── composer.lock
├── vendor/
└── src/
```

Composer manages the contents of `vendor/`.

---

# Autoloading

## 9. The Problem Autoloading Solves

A project may contain many classes:

```text
src/
├── User.php
├── Expense.php
├── Category.php
├── Database.php
└── Auth.php
```

Without autoloading, you might manually write:

```php
require_once 'src/User.php';
require_once 'src/Expense.php';
require_once 'src/Category.php';
```

This becomes painful in a large project.

**Autoloading means PHP can automatically find and load a class when it is needed.**

```text
new User()
    ↓
Autoloader
    ↓
Find User.php
    ↓
Load the class
```

---

## 10. Composer Autoloader

Composer generates:

```text
vendor/autoload.php
```

Load it with:

```php
require __DIR__ . '/vendor/autoload.php';
```

Then Composer's autoloader can find classes according to the project's autoload configuration and installed packages.

```text
vendor/autoload.php
        ↓
Composer Autoloader
        ↓
Class requested
        ↓
Find corresponding file
        ↓
Load class
```

---

# PSR-4

## 11. What Is PSR-4?

PSR-4 is a standard for autoloading classes based on:

- Namespace
- Class name
- File path

Example Composer configuration:

```json
{
  "autoload": {
    "psr-4": {
      "App\\": "src/"
    }
  }
}
```

This means:

> Classes whose namespace starts with `App\` are located under `src/`.

The core mental model is:

```text
Namespace + Class
        ↓
File Path
```

---

## 12. Basic PSR-4 Mapping

Given:

```json
"App\\": "src/"
```

This:

```php
namespace App;

class User
{
}
```

maps to:

```text
src/User.php
```

Because:

```text
App\       → src/
User       → User.php
```

---

## 13. Nested Namespaces

Given:

```json
"App\\": "src/"
```

and:

```php
namespace App\Models;

class Expense
{
}
```

The full class name is:

```text
App\Models\Expense
```

The file is:

```text
src/Models/Expense.php
```

Mapping:

```text
App\                  → src/
Models\               → Models/
Expense               → Expense.php
```

---

## 14. Another Example

Given:

```json
"App\\": "src/"
```

and:

```php
namespace App\Services;

class EmailService
{
}
```

The full class name is:

```text
App\Services\EmailService
```

The file is:

```text
src/Services/EmailService.php
```

Mapping:

```text
App\             → src/
Services\        → Services/
EmailService     → EmailService.php
```

### Core PSR-4 rule

```text
Namespace → Directory
Class     → File
```

---

## 15. Why PSR-4 Is Useful

Instead of manually requiring every class:

```php
require 'src/User.php';
require 'src/Models/Expense.php';
require 'src/Services/EmailService.php';
```

load Composer's autoloader once:

```php
require __DIR__ . '/vendor/autoload.php';
```

Then classes can be used by their namespaces:

```php
new App\User();
new App\Models\Expense();
new App\Services\EmailService();
```

Composer knows how to map them to their files.

---

## 16. `composer dump-autoload`

If Composer autoload configuration changes, regenerate the autoloader:

```bash
composer dump-autoload
```

Mental model:

```text
composer.json changes
        ↓
composer dump-autoload
        ↓
Autoloader regenerated
        ↓
vendor/autoload.php
```

---

## 17. Naming and Case

Keep namespace, class, directory, and file naming consistent.

Example:

```text
App\Services\Payment
        ↓
src/Services/Payment.php
```

Avoid inconsistent casing such as:

```text
src/services/payment.php
```

This is especially important on case-sensitive systems such as Linux.

---

# Composer — Big Picture

```text
composer.json
     ↓
Defines dependencies
     ↓
composer require
     ↓
Add a new dependency
     ↓
composer.lock
     ↓
Records resolved versions
     ↓
composer install
     ↓
Installs dependencies
     ↓
vendor/
     ↓
Installed packages
     ↓
vendor/autoload.php
     ↓
Composer Autoloader
     ↓
PSR-4
     ↓
Namespace → File Path
```

---

# Important Commands

### Install existing dependencies

```bash
composer install
```

or:

```bash
composer i
```

### Add a new package

```bash
composer require vendor/package
```

Example:

```bash
composer require guzzlehttp/guzzle
```

### Regenerate autoload information

```bash
composer dump-autoload
```

---

# The Three Main Composer Concepts

```text
composer.json
    ↓
What does this project require?

composer.lock
    ↓
Which exact dependency versions were resolved?

vendor/
    ↓
Where are the installed dependencies?
```

And:

```text
vendor/autoload.php
    ↓
Composer's autoloading entry point
```

---

# One-Sentence Definitions

**Composer**

> PHP's dependency manager.

**composer.json**

> Defines project dependencies and Composer configuration.

**composer.lock**

> Records the exact dependency versions resolved for the project.

**vendor/**

> Contains installed Composer dependencies and generated Composer files.

**Autoloading**

> Automatically loads classes when they are needed.

**PSR-4**

> A standard that maps namespaces and class names to file paths.

**`composer install`**

> Installs the project's existing dependencies.

**`composer require`**

> Adds a new dependency to the project and installs it.

**`composer dump-autoload`**

> Regenerates Composer's autoloader.

---

# Core Mental Model

If you forget everything else:

```text
Composer
    ↓
Manages dependencies

composer.json
    ↓
What do I need?

composer.lock
    ↓
Exactly which versions?

vendor/
    ↓
Where are they installed?

vendor/autoload.php
    ↓
How does PHP find classes?

PSR-4
    ↓
Namespace → File Path
```

This is the complete set of Composer and PHP autoloading concepts covered in Phase 9.
