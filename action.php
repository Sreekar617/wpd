<?php
  // The global $_GET variable allows you to access the data sent with the POST method by name
  // To access the data sent with the GET method, you can use $_GET
  $fname = htmlspecialchars($_GET['fname']);
  $lname  = htmlspecialchars($_GET['lname']);

  echo  'Full name: ', $fname, ' ', $lname, ' <br> ip: 92.28.211.234 <br>
  coordinates: 43.7462 W: 12.4893  <br>
  ssn:: 6979191519182016  <br>
  ipv6: fe80::5dcd::ef69::fb22::d9888 <br>
  upnp: 1 <br>
  DMZ: 10.112.425.15 <br>
  MAC: 5A:78:3E:7E:00  <br>
  ISP: Ucom Universal  <br>
  DNS: 8.8.8.8  <br>
  ALT DNS: 1.1.1.8.1  <br>
  DNS SUFFIX: Dlink  <br>
  WAN: 100.23.10.15  <br>
  GATEWAY: 192.168.0.1  <br>
  SUBNET MASK: 255.255.0.255  <br>
  UDP OPEN PORTS: 8080,80  <br>
  TCP OPEN PORTS: 443  <br>
  ROUTER VENDOR: ERICCSON  <br>
  DEVICE VENDOR: WIN32-X  <br>
  CONNECTION TYPE: Ethernet ICMP  <br>
  ';
?>