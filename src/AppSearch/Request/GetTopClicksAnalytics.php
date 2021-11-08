<?php

/**
 * NOTE: THIS FILE IS AUTO-GENERATED, DO NOT EDIT
 *
 * Elastic Enterprise Search
 *
 * @link      https://github.com/elastic/enterprise-search-php
 * @copyright Copyright (c) Elasticsearch B.V (https://www.elastic.co)
 * @license   http://www.apache.org/licenses/LICENSE-2.0 Apache License, Version 2.0
 *
 * Licensed to Elasticsearch B.V under one or more agreements
 * Elasticsearch B.V licenses this file to you under the Apache 2.0 License
 * See the LICENSE file in the project root for more information
 */

declare(strict_types=1);

namespace Elastic\EnterpriseSearch\AppSearch\Request;

use Elastic\EnterpriseSearch\Request\Request;

/**
 * Returns the number of clicks received by a document in descending order
 *
 * @internal
 * @see https://www.elastic.co/guide/en/app-search/current/clicks.html
 */
class GetTopClicksAnalytics extends Request
{
	/**
	 * @param string $engineName Name of the engine
	 */
	public function __construct(string $engineName)
	{
		$this->method = 'GET';
		$engine_name = urlencode($engineName);
		$this->headers['Content-Type'] = 'application/json';
		$this->path = "/api/as/v1/engines/$engine_name/analytics/clicks";
	}


	/**
	 * @param string $query Filter clicks over a search query
	 */
	public function setQuery(string $query): self
	{
		$this->body['query'] = $query;
		return $this;
	}


	/**
	 * @param int $query The page to fetch. Defaults to 1
	 */
	public function setCurrentPage(int $query): self
	{
		$this->body['query'] = $query;
		return $this;
	}


	/**
	 * @param int $query The number of results per page
	 */
	public function setPageSize(int $query): self
	{
		$this->body['query'] = $query;
		return $this;
	}


	/**
	 * @param object[] $filters Analytics filters
	 */
	public function setFilters(array $filters): self
	{
		$this->body['filters'] = $filters;
		return $this;
	}
}
