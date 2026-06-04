<?php
    class apiHandler
    {
        private $targetUrl;
        private $securityKey;

        public function __construct($incomingUrl, $incomingKey)
        {
            $this->targetUrl = $incomingUrl;
            $this->securityKey = $incomingKey;
        }

        public function fetchCurrentPopular($selectedPage = 1)
        {
            //constructing the string ith newly assigned class properties
            $endpointUrl = "{$this->targetUrl}/movie/popular?api_key={$this->securityKey}&language=en-US&page=". intval{$selectedPage};
            $rawJsonString = @file_get_contents($endpointUrl);

            if($rawJsonString === false)
            {
                return [];
            }
            $decodedPayload = json_decode($rawJsonString);
            return $decodedPayload->results ?? [];
        }
    }
?>