<?php

/**
 * Elastic Enterprise Search
 *
 * @link      https://github.com/elastic/enterprise-search-php
 * @copyright Copyright (c) Elasticsearch B.V (https://www.elastic.co)
 * @license   http://www.apache.org/licenses/LICENSE-2.0 Apache License, Version 2.0
 * @generated This file is generated, please do not edit
 *
 * Licensed to Elasticsearch B.V under one or more agreements
 * Elasticsearch B.V licenses this file to you under the Apache 2.0 License
 * See the LICENSE file in the project root for more information
 */

declare(strict_types=1);

namespace Elastic\EnterpriseSearch\WorkplaceSearch\Request;

use Elastic\EnterpriseSearch\Request\Request;

/**
 * Retrieve a synonym set by ID
 * @see https://www.elastic.co/guide/en/workplace-search/current/workplace-synonyms-api.html#show-synonym
 */
class GetSynonymSet extends Request
{
	/**
	 * @param string $synonymSetId Synonym Set ID
	 */
	public function __construct(string $synonymSetId)
	{
		$this->method = 'GET';
		$synonym_set_id = urlencode($synonymSetId);
		$this->path = "/api/ws/v1/synonyms/$synonym_set_id";
	}
}
