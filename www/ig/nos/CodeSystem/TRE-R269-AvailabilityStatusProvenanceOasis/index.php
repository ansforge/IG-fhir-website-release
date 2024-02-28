<?php
function Redirect($url)
{
  header('Location: ' . $url, true, 302);
  exit();
}

$accept = $_SERVER['HTTP_ACCEPT'];
if (strpos($accept, 'application/json+fhir') !== false)
  Redirect('https://interop.esante.gouv.fr/ig/nos/1.2.0/CodeSystem-TRE-R269-AvailabilityStatusProvenanceOasis.json2');
elseif (strpos($accept, 'application/fhir+json') !== false)
  Redirect('https://interop.esante.gouv.fr/ig/nos/1.2.0/CodeSystem-TRE-R269-AvailabilityStatusProvenanceOasis.json1');
elseif (strpos($accept, 'json') !== false)
  Redirect('https://interop.esante.gouv.fr/ig/nos/1.2.0/CodeSystem-TRE-R269-AvailabilityStatusProvenanceOasis.json');
elseif (strpos($accept, 'application/xml+fhir') !== false)
  Redirect('https://interop.esante.gouv.fr/ig/nos/1.2.0/CodeSystem-TRE-R269-AvailabilityStatusProvenanceOasis.xml2');
elseif (strpos($accept, 'application/fhir+xml') !== false)
  Redirect('https://interop.esante.gouv.fr/ig/nos/1.2.0/CodeSystem-TRE-R269-AvailabilityStatusProvenanceOasis.xml1');
elseif (strpos($accept, 'html') !== false)
  Redirect('https://interop.esante.gouv.fr/ig/nos/1.2.0/CodeSystem-TRE-R269-AvailabilityStatusProvenanceOasis.html');
else 
  Redirect('https://interop.esante.gouv.fr/ig/nos/1.2.0/CodeSystem-TRE-R269-AvailabilityStatusProvenanceOasis.xml');
?>
    
You should not be seeing this page. If you do, PHP has failed badly.
