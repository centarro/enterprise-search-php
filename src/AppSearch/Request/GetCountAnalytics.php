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
 * Returns the number of clicks and total number of queries over a period
 *
 * @internal
 * @see https://www.elastic.co/guide/en/app-search/current/counts.html
 */
class GetCountAnalytics extends Request
{
	/**
	 * @param string $engineName Name of the engine
	 */
	public function __construct(string $engineName)
	{
		$this->method = 'GET';
		$engine_name = urlencode($engineName);
		$this->headers['Content-Type'] = 'application/json';
		$this->path = "/api/as/v1/engines/$engine_name/analytics/counts";
	}


	/**
	 * @param object[] $filters Analytics filters
	 */
	public function setFilters(array $filters): self
	{
		$this->body['filters'] = $filters;
		return $this;
	}


	/**
	 * @param string $interval You can define an interval along with your date range. Can be either hour or day
	 */
	public function setInterval(string $interval): self
	{
		$this->body['interval'] = $interval;
		return $this;
	}
}
