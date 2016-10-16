TYPO3 CMS Routing Example
=========================

About
-----

"Routing Example" (`EXT:routingexample`) is a demo extension for the open-source enterprise content management system [TYPO3 CMS](https://typo3.org).

In combination with "Request Routing Service" (`EXT:routing`) by Xavier Perseguers, see [TYPO3 Extension Repository](https://typo3.org/extensions/repository/view/routing) (TER), the demo implements a server-side solution for a typical REST API. It outputs the list of all backend users or the details of a specific user, depending on the request.


Requirements
------------

"Routing Example" requires TYPO3 CMS 7.6 LTS and PHP version 5.3 or greater (version 5.6+ recommended). This extension builds on top of `EXT:routing` (successfully tested with version 0.4.0).


Installation
------------

* install an empty TYPO3 CMS 7.6 LTS instance from scatch
* open the Extension Manager and install `EXT:routing` from the TER
* download `EXT:routingexample` [from GitHub](https://github.com/web-und-mobile/routingexample/releases)
* extract the archive and store the content as `routingexample` under `typo3conf/ext/`
* make sure, the permissions of the folder and files are correct
* enable `EXT:routingexample` in the Extension Manager


Test/Usage
----------

Access `http://example.com/index.php?eID=routing&route=routingexample/api/userlist`. The output should list all *active* TYPO3 backend users with their UID and username, for example:

```json
[
  {
    "pid": 0,
    "uid": 1,
    "username": "admin"
  },
  {
    "pid": 0,
    "uid": 2,
    "username": "brad.pitt"
  }
]
```

The request `http://example.com/index.php?eID=routing&route=routingexample/api/userdetails/2` outputs the details of user "brad.pitt" (UID: 2) only.


Documentation
-------------

The development of this extension has been described in detail and with a lot of background information in the German IT journal "Web & Mobile Developer" (http://webundmobile.de) in 2016.
Publisher: Neue Mediengesellschaft Ulm mbH.


References
----------

* **TYPO3 CMS:** https://typo3.org
* **Author (Michael Schams):** https://schams.net
* **Extension source code:** https://github.com/web-und-mobile/typo3-routingexample
* **Extension `EXT:routing`:** https://typo3.org/extensions/repository/view/routing


License
-------

The MIT License

Copyright (c) 2016 Michael Schams, https://schams.net

Permission is hereby granted, free of charge, to any person obtaining a copy of this software and associated documentation files (the "Software"), to deal in the Software without restriction, including without limitation the rights to use, copy, modify, merge, publish, distribute, sublicense, and/or sell copies of the Software, and to permit persons to whom the Software is furnished to do so, subject to the following conditions:

The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.

THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY, FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM, OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE SOFTWARE.
