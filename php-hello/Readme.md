Adding the php to an openshift project

```
oc new-project test-php
```

Adding the php hello git project

```
oc new-app --name hello https://github.com/rcauchon/DO180-apps.git --context-dir=php-hello
```

Adding secret to the project
```
oc create secret generic php-secret --from-literal=MYSQLDB_SERVICE_HOST='ZNpkRp8gHTgkUCxKK8Q5PAp/5sA='
```

Linking secret to application
```
oc set env --from=secret/php-secret deployment/hello
```

Create a route to test the result
```
oc expose svc/hello
```

Test the result
```
curl hello-route-test-namespace.itzroks-6630025ezu-2hlbm9-6ccd7f378ae819553d37d5f2ee142bd6-0000.us-south.containers.appdomain.cloud/db.php


StatusCode        : 200
StatusDescription : OK
Content           :  Host: ZNpkRp8gHTgkUCxKK8Q5PAp/5sA= DBname: User: Password:<br><br />
                    <b>Warning</b>:  mysqli::__construct(): php_network_getaddresses: getaddrinfo failed: Name or
```

Done
