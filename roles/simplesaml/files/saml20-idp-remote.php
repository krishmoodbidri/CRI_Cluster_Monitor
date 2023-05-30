<?php
$metadata['https://samltest.id/saml/idp'] = array (
  'entityid' => 'https://samltest.id/saml/idp',
  'contacts' =>
  array (
  ),
  'metadata-set' => 'saml20-idp-remote',
  'expire' => 4102444842,
  'SingleSignOnService' =>
  array (
    0 =>
    array (
      'Binding' => 'urn:mace:shibboleth:1.0:profiles:AuthnRequest',
      'Location' => 'https://samltest.id/idp/profile/Shibboleth/SSO',
    ),
    1 =>
    array (
      'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-POST',
      'Location' => 'https://samltest.id/idp/profile/SAML2/POST/SSO',
    ),
    2 =>
    array (
      'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-POST-SimpleSign',
      'Location' => 'https://samltest.id/idp/profile/SAML2/POST-SimpleSign/SSO',
    ),
    3 =>
    array (
      'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Redirect',
      'Location' => 'https://samltest.id/idp/profile/SAML2/Redirect/SSO',
    ),
    4 =>
    array (
      'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:SOAP',
      'Location' => 'https://samltest.id/idp/profile/SAML2/SOAP/ECP',
    ),
  ),
  'SingleLogoutService' =>
  array (
    0 =>
    array (
      'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Redirect',
      'Location' => 'https://samltest.id/idp/profile/SAML2/Redirect/SLO',
    ),
    1 =>
    array (
      'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-POST',
      'Location' => 'https://samltest.id/idp/profile/SAML2/POST/SLO',
    ),
    2 =>
    array (
      'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-POST-SimpleSign',
      'Location' => 'https://samltest.id/idp/profile/SAML2/POST-SimpleSign/SLO',
    ),
  ),
  'ArtifactResolutionService' =>
  array (
    0 =>
    array (
      'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:SOAP',
      'Location' => 'https://samltest.id/idp/profile/SAML2/SOAP/ArtifactResolution',
      'index' => 1,
    ),
  ),
  'NameIDFormats' =>
  array (
  ),
  'keys' =>
  array (
    0 =>
    array (
      'encryption' => false,
      'signing' => true,
      'type' => 'X509Certificate',
      'X509Certificate' => '
MIIDETCCAfmgAwIBAgIUZRpDhkNKl5eWtJqk0Bu1BgTTargwDQYJKoZIhvcNAQEL
BQAwFjEUMBIGA1UEAwwLc2FtbHRlc3QuaWQwHhcNMTgwODI0MjExNDEwWhcNMzgw
ODI0MjExNDEwWjAWMRQwEgYDVQQDDAtzYW1sdGVzdC5pZDCCASIwDQYJKoZIhvcN
AQEBBQADggEPADCCAQoCggEBAJrh9/PcDsiv3UeL8Iv9rf4WfLPxuOm9W6aCntEA
8l6c1LQ1Zyrz+Xa/40ZgP29ENf3oKKbPCzDcc6zooHMji2fBmgXp6Li3fQUzu7yd
+nIC2teejijVtrNLjn1WUTwmqjLtuzrKC/ePoZyIRjpoUxyEMJopAd4dJmAcCq/K
k2eYX9GYRlqvIjLFoGNgy2R4dWwAKwljyh6pdnPUgyO/WjRDrqUBRFrLQJorR2kD
c4seZUbmpZZfp4MjmWMDgyGM1ZnR0XvNLtYeWAyt0KkSvFoOMjZUeVK/4xR74F8e
8ToPqLmZEg9ZUx+4z2KjVK00LpdRkH9Uxhh03RQ0FabHW6UCAwEAAaNXMFUwHQYD
VR0OBBYEFJDbe6uSmYQScxpVJhmt7PsCG4IeMDQGA1UdEQQtMCuCC3NhbWx0ZXN0
LmlkhhxodHRwczovL3NhbWx0ZXN0LmlkL3NhbWwvaWRwMA0GCSqGSIb3DQEBCwUA
A4IBAQBNcF3zkw/g51q26uxgyuy4gQwnSr01Mhvix3Dj/Gak4tc4XwvxUdLQq+jC
cxr2Pie96klWhY/v/JiHDU2FJo9/VWxmc/YOk83whvNd7mWaNMUsX3xGv6AlZtCO
L3JhCpHjiN+kBcMgS5jrtGgV1Lz3/1zpGxykdvS0B4sPnFOcaCwHe2B9SOCWbDAN
JXpTjz1DmJO4ImyWPJpN1xsYKtm67Pefxmn0ax0uE2uuzq25h0xbTkqIQgJzyoE/
DPkBFK1vDkMfAW11dQ0BXatEnW7Gtkc0lh2/PIbHWj4AzxYMyBf5Gy6HSVOftwjC
voQR2qr2xJBixsg+MIORKtmKHLfU
                        ',
    ),
    1 =>
    array (
      'encryption' => false,
      'signing' => true,
      'type' => 'X509Certificate',
      'X509Certificate' => '
MIIDEjCCAfqgAwIBAgIVAMECQ1tjghafm5OxWDh9hwZfxthWMA0GCSqGSIb3DQEB
CwUAMBYxFDASBgNVBAMMC3NhbWx0ZXN0LmlkMB4XDTE4MDgyNDIxMTQwOVoXDTM4
MDgyNDIxMTQwOVowFjEUMBIGA1UEAwwLc2FtbHRlc3QuaWQwggEiMA0GCSqGSIb3
DQEBAQUAA4IBDwAwggEKAoIBAQC0Z4QX1NFKs71ufbQwoQoW7qkNAJRIANGA4iM0
ThYghul3pC+FwrGv37aTxWXfA1UG9njKbbDreiDAZKngCgyjxj0uJ4lArgkr4AOE
jj5zXA81uGHARfUBctvQcsZpBIxDOvUUImAl+3NqLgMGF2fktxMG7kX3GEVNc1kl
bN3dfYsaw5dUrw25DheL9np7G/+28GwHPvLb4aptOiONbCaVvh9UMHEA9F7c0zfF
/cL5fOpdVa54wTI0u12CsFKt78h6lEGG5jUs/qX9clZncJM7EFkN3imPPy+0HC8n
spXiH/MZW8o2cqWRkrw3MzBZW3Ojk5nQj40V6NUbjb7kfejzAgMBAAGjVzBVMB0G
A1UdDgQWBBQT6Y9J3Tw/hOGc8PNV7JEE4k2ZNTA0BgNVHREELTArggtzYW1sdGVz
dC5pZIYcaHR0cHM6Ly9zYW1sdGVzdC5pZC9zYW1sL2lkcDANBgkqhkiG9w0BAQsF
AAOCAQEASk3guKfTkVhEaIVvxEPNR2w3vWt3fwmwJCccW98XXLWgNbu3YaMb2RSn
7Th4p3h+mfyk2don6au7Uyzc1Jd39RNv80TG5iQoxfCgphy1FYmmdaSfO8wvDtHT
TNiLArAxOYtzfYbzb5QrNNH/gQEN8RJaEf/g/1GTw9x/103dSMK0RXtl+fRs2nbl
D1JJKSQ3AdhxK/weP3aUPtLxVVJ9wMOQOfcy02l+hHMb6uAjsPOpOVKqi3M8XmcU
ZOpx4swtgGdeoSpeRyrtMvRwdcciNBp9UZome44qZAYH1iqrpmmjsfI9pJItsgWu
3kXPjhSfj1AJGR1l9JGvJrHki1iHTA==
                        ',
    ),
    2 =>
    array (
      'encryption' => true,
      'signing' => false,
      'type' => 'X509Certificate',
      'X509Certificate' => '
MIIDEjCCAfqgAwIBAgIVAPVbodo8Su7/BaHXUHykx0Pi5CFaMA0GCSqGSIb3DQEB
CwUAMBYxFDASBgNVBAMMC3NhbWx0ZXN0LmlkMB4XDTE4MDgyNDIxMTQwOVoXDTM4
MDgyNDIxMTQwOVowFjEUMBIGA1UEAwwLc2FtbHRlc3QuaWQwggEiMA0GCSqGSIb3
DQEBAQUAA4IBDwAwggEKAoIBAQCQb+1a7uDdTTBBFfwOUun3IQ9nEuKM98SmJDWa
MwM877elswKUTIBVh5gB2RIXAPZt7J/KGqypmgw9UNXFnoslpeZbA9fcAqqu28Z4
sSb2YSajV1ZgEYPUKvXwQEmLWN6aDhkn8HnEZNrmeXihTFdyr7wjsLj0JpQ+VUlc
4/J+hNuU7rGYZ1rKY8AA34qDVd4DiJ+DXW2PESfOu8lJSOteEaNtbmnvH8KlwkDs
1NvPTsI0W/m4SK0UdXo6LLaV8saIpJfnkVC/FwpBolBrRC/Em64UlBsRZm2T89ca
uzDee2yPUvbBd5kLErw+sC7i4xXa2rGmsQLYcBPhsRwnmBmlAgMBAAGjVzBVMB0G
A1UdDgQWBBRZ3exEu6rCwRe5C7f5QrPcAKRPUjA0BgNVHREELTArggtzYW1sdGVz
dC5pZIYcaHR0cHM6Ly9zYW1sdGVzdC5pZC9zYW1sL2lkcDANBgkqhkiG9w0BAQsF
AAOCAQEABZDFRNtcbvIRmblnZItoWCFhVUlq81ceSQddLYs8DqK340//hWNAbYdj
WcP85HhIZnrw6NGCO4bUipxZXhiqTA/A9d1BUll0vYB8qckYDEdPDduYCOYemKkD
dmnHMQWs9Y6zWiYuNKEJ9mf3+1N8knN/PK0TYVjVjXAf2CnOETDbLtlj6Nqb8La3
sQkYmU+aUdopbjd5JFFwbZRaj6KiHXHtnIRgu8sUXNPrgipUgZUOVhP0C0N5OfE4
JW8ZBrKgQC/6vJ2rSa9TlzI6JAa5Ww7gMXMP9M+cJUNQklcq+SBnTK8G+uBHgPKR
zBDsMIEzRtQZm4GIoHJae4zmnCekkQ==
                        ',
    ),
  ),
  'scope' =>
  array (
    0 => 'samltest.id',
  ),
  'UIInfo' =>
  array (
    'DisplayName' =>
    array (
      'en' => 'SAMLtest IdP',
    ),
    'Description' =>
    array (
      'en' => 'A free and basic IdP for testing SAML deployments',
    ),
    'InformationURL' =>
    array (
    ),
    'PrivacyStatementURL' =>
    array (
    ),
    'Logo' =>
    array (
      0 =>
      array (
        'url' => 'https://samltest.id/saml/logo.png',
        'height' => 90,
        'width' => 225,
      ),
    ),
  ),
  'name' =>
  array (
    'en' => 'SAMLtest IdP',
  ),
);

