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
*Experimental* If the header Content-Type: application/vnd.api+json is specified, it will transform the output to JSONApi

# Further Documentation
Have a look at http://github.com/Bigz/Halapi

# TODO
- (MUST) Provide configuration options to use the implementation of your choiche (ORM, ODM, ...)
