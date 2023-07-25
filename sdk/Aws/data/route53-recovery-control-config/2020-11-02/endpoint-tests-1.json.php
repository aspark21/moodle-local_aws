<?php
// This file was auto-generated from sdk-root/src/data/route53-recovery-control-config/2020-11-02/endpoint-tests-1.json
return [ 'testCases' => [ [ 'documentation' => 'For region aws-global with FIPS disabled and DualStack disabled', 'expect' => [ 'endpoint' => [ 'properties' => [ 'authSchemes' => [ [ 'signingRegion' => 'us-west-2', 'name' => 'sigv4', 'signingName' => 'route53-recovery-control-config', ], ], ], 'url' => 'https://route53-recovery-control-config.us-west-2.amazonaws.com', ], ], 'params' => [ 'UseFIPS' => false, 'UseDualStack' => false, 'Region' => 'aws-global', ], ], [ 'documentation' => 'For custom endpoint with fips disabled and dualstack disabled', 'expect' => [ 'endpoint' => [ 'url' => 'https://example.com', ], ], 'params' => [ 'UseFIPS' => false, 'UseDualStack' => false, 'Region' => 'us-east-1', 'Endpoint' => 'https://example.com', ], ], [ 'documentation' => 'For custom endpoint with fips enabled and dualstack disabled', 'expect' => [ 'error' => 'Invalid Configuration: FIPS and custom endpoint are not supported', ], 'params' => [ 'UseFIPS' => true, 'UseDualStack' => false, 'Region' => 'us-east-1', 'Endpoint' => 'https://example.com', ], ], [ 'documentation' => 'For custom endpoint with fips disabled and dualstack enabled', 'expect' => [ 'error' => 'Invalid Configuration: Dualstack and custom endpoint are not supported', ], 'params' => [ 'UseFIPS' => false, 'UseDualStack' => true, 'Region' => 'us-east-1', 'Endpoint' => 'https://example.com', ], ], ], 'version' => '1.0',];
