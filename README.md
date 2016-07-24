# Dev Tools

Adds some tools to help with PHP development.

### Version

1.0.0

---

## DevLogger

Use as alternative to firephp/firelogger.  It can be used to log debug information to a text file within the project (e.g. in Symfony's logs folder).

It's useful to keep the file open in a program that will autoupdate it.  Sublime does this.

### Initialization

    $devlogger = new ClearCutCoding\DevTools\DevLogger('PATH/TO/LOG/FILE');

On each request, this file will be created and emptied to avoid clutter.

### Writing entries

    $devlogger->log('something');

The entry will be appended with PHP_EOL.

### Destruction

The class will close the handle to the log file using __destructor.



