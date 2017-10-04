Symfony bundle for Bigz/Halapi

# Install
```
composer require Bigz/halapibundle
```

Register it in your AppKernel
```
new Bigz\HalapiBundle\BigzHalapiBundle(),
```

# Usage
It will hook in JmsSerializer and add HATEOAS data before serialization.

# Further Documentation
Have a look at http://github.com/Bigz/Halapi

# TODO
- (MUST) Provide configuration options to use the implementation of your choiche (ORM, ODM, ...)
