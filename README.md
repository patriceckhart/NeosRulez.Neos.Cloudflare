# Neos CMS Cloudflare ProxyCache Manager

A Neos CMS package that flushes the Cloudflare proxy cache when publishing. Provides a backend module for manual flushing and a cli job.

## Installation

Just run:

```
composer require neosrulez/neos-cloudflare
```

### Configuration

```yaml
NeosRulez:
  Neos:
    Cloudflare:
      proxyCache:
        default:
          zoneName: 'domain1.tld'
          apiKey: '8843d7f92416211de9ebb963ff4ce281259'
          email: 'mail@domain.tld'
        second:
          zoneName: 'domain2.tld'
          apiKey: '8843d7f92416211de9ebb963ff4ce281259'
          email: 'mail@domain.tld'
```

## Author

* E-Mail: mail@patriceckhart.com
* URL: http://www.patriceckhart.com 
