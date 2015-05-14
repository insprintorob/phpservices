PHPServices provides mockable wrapper classes around standard PHP functionality

Installation
---

Install using composer

```
require insprintorob/phpservices
```

Purpose
---
Years ago what initially attracted me to PHP was the huge standard library with its massive array of built in functionality.
However, the standard library is not 100% consistent with its function names and parameter order. If your doing modern test
driven development, calls to the standard library cannot be tested by unit tests.

PHPServices provides classes that wrap around standard PHP functionality such as the standard library. For example, instead
of str_replace(), you might use $stringOperations->replace(). It also provides a HttpService, with functionality such as 
getQuery(), getPost() and getUserAgent() which saves you from needing to directly access parts of the $_GET, $_POST and $_SERVER
superglobals.

If your contributing new functions, try to make sure they are named consistently with existing PHPServices functions and have a 
consistent parameter order. You don't have to replicate the function names and parameter order of the php standard library. Function
names should follow PSR naming conventions with no abbreviations of words.