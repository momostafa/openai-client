<?php

/**
 * @return array<string, mixed>
 */
function responseObject(): array
{
    return [
        'id' => 'resp_67ccf18ef5fc8190b16dbee19bc54e5f087bb177ab789d5c',
        'object' => 'response',
        'created_at' => 1741484430,
        'status' => 'completed',
        'error' => null,
        'incomplete_details' => null,
        'instructions' => null,
        'max_output_tokens' => null,
        'metadata' => [],
        'model' => 'gpt-4o-2024-08-06',
        'output' => [
            [
                'type' => 'web_search_call',
                'id' => 'ws_67ccf18f64008190a39b619f4c8455ef087bb177ab789d5c',
                'status' => 'completed',
            ],
            [
                'type' => 'message',
                'id' => 'msg_67ccf190ca3881909d433c50b1f6357e087bb177ab789d5c',
                'status' => 'completed',
                'role' => 'assistant',
                'content' => [
                    [
                        'type' => 'output_text',
                        'text' => 'As of today, March 9, 2025, one notable positive news story...',
                        'annotations' => [
                            [
                                'type' => 'url_citation',
                                'start_index' => 442,
                                'end_index' => 557,
                                'url' => 'https://.../?utm_source=chatgpt.com',
                                'title' => '...',
                            ],
                            [
                                'type' => 'url_citation',
                                'start_index' => 962,
                                'end_index' => 1077,
                                'url' => 'https://.../?utm_source=chatgpt.com',
                                'title' => '...',
                            ],
                            [
                                'type' => 'url_citation',
                                'start_index' => 1336,
                                'end_index' => 1451,
                                'url' => 'https://.../?utm_source=chatgpt.com',
                                'title' => '...',
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'parallel_tool_calls' => true,
        'previous_response_id' => null,
        'reasoning' => [
            'effort' => null,
            'generate_summary' => null,
        ],
        'store' => true,
        'temperature' => 1.0,
        'text' => [
            'format' => [
                'type' => 'text',
            ],
        ],
        'tool_choice' => 'auto',
        'tools' => [
            [
                'type' => 'web_search_preview',
                'domains' => [],
                'search_context_size' => 'medium',
                'user_location' => [
                    'type' => 'approximate',
                    'city' => null,
                    'country' => 'US',
                    'region' => null,
                    'timezone' => null,
                ],
            ],
        ],
        'top_p' => 1.0,
        'truncation' => 'disabled',
        'user' => null,
        'usage' => [
            'input_tokens' => 328,
            'input_tokens_details' => [
                'cached_tokens' => 0,
            ],
            'output_tokens' => 356,
            'output_tokens_details' => [
                'reasoning_tokens' => 0,
            ],
            'total_tokens' => 684,
        ],
    ];
}

/**
 * @return array<string, mixed>
 */
function createResponseResource(): array
{
    return [
        'id' => 'resp_67ccf18ef5fc8190b16dbee19bc54e5f087bb177ab789d5c',
        'object' => 'response',
        'created_at' => 1741484430,
        'status' => 'completed',
        'error' => null,
        'incomplete_details' => null,
        'instructions' => null,
        'max_output_tokens' => null,
        'metadata' => [],
        'model' => 'gpt-4o-2024-08-06',
        'output' => [
            [
                'type' => 'web_search_call',
                'id' => 'ws_67ccf18f64008190a39b619f4c8455ef087bb177ab789d5c',
                'status' => 'completed',
            ],
            [
                'type' => 'message',
                'id' => 'msg_67ccf190ca3881909d433c50b1f6357e087bb177ab789d5c',
                'status' => 'completed',
                'role' => 'assistant',
                'content' => [
                    [
                        'type' => 'output_text',
                        'text' => 'As of today, March 9, 2025, one notable positive news story...',
                        'annotations' => [
                            [
                                'type' => 'url_citation',
                                'start_index' => 442,
                                'end_index' => 557,
                                'url' => 'https://.../?utm_source=chatgpt.com',
                                'title' => '...',
                            ],
                            [
                                'type' => 'url_citation',
                                'start_index' => 962,
                                'end_index' => 1077,
                                'url' => 'https://.../?utm_source=chatgpt.com',
                                'title' => '...',
                            ],
                            [
                                'type' => 'url_citation',
                                'start_index' => 1336,
                                'end_index' => 1451,
                                'url' => 'https://.../?utm_source=chatgpt.com',
                                'title' => '...',
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'parallel_tool_calls' => true,
        'previous_response_id' => null,
        'reasoning' => [
            'effort' => null,
            'generate_summary' => null,
        ],
        'store' => true,
        'temperature' => 1.0,
        'text' => [
            'format' => [
                'type' => 'text',
            ],
        ],
        'tool_choice' => 'auto',
        'tools' => [
            [
                'type' => 'web_search_preview',
                'domains' => [],
                'search_context_size' => 'medium',
                'user_location' => [
                    'type' => 'approximate',
                    'city' => null,
                    'country' => 'US',
                    'region' => null,
                    'timezone' => null,
                ],
            ],
        ],
        'top_p' => 1.0,
        'truncation' => 'disabled',
        'usage' => [
            'input_tokens' => 328,
            'input_tokens_details' => [
                'cached_tokens' => 0,
            ],
            'output_tokens' => 356,
            'output_tokens_details' => [
                'reasoning_tokens' => 0,
            ],
            'total_tokens' => 684,
        ],
        'user' => null,
    ];
}

/**
 * @return array<string, mixed>
 */
function retrieveResponseResource(): array
{
    return [
        'id' => 'resp_67ccf18ef5fc8190b16dbee19bc54e5f087bb177ab789d5c',
        'object' => 'response',
        'created_at' => 1741484430,
        'status' => 'completed',
        'error' => null,
        'incomplete_details' => null,
        'instructions' => null,
        'max_output_tokens' => null,
        'metadata' => [],
        'model' => 'gpt-4o-2024-08-06',
        'output' => [
            [
                'type' => 'web_search_call',
                'id' => 'ws_67ccf18f64008190a39b619f4c8455ef087bb177ab789d5c',
                'status' => 'completed',
            ],
            [
                'type' => 'message',
                'id' => 'msg_67ccf190ca3881909d433c50b1f6357e087bb177ab789d5c',
                'status' => 'completed',
                'role' => 'assistant',
                'content' => [
                    [
                        'type' => 'output_text',
                        'text' => 'As of today, March 9, 2025, one notable positive news story...',
                        'annotations' => [
                            [
                                'type' => 'url_citation',
                                'start_index' => 442,
                                'end_index' => 557,
                                'url' => 'https://.../?utm_source=chatgpt.com',
                                'title' => '...',
                            ],
                            [
                                'type' => 'url_citation',
                                'start_index' => 962,
                                'end_index' => 1077,
                                'url' => 'https://.../?utm_source=chatgpt.com',
                                'title' => '...',
                            ],
                            [
                                'type' => 'url_citation',
                                'start_index' => 1336,
                                'end_index' => 1451,
                                'url' => 'https://.../?utm_source=chatgpt.com',
                                'title' => '...',
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'parallel_tool_calls' => true,
        'previous_response_id' => null,
        'reasoning' => [
            'effort' => null,
            'generate_summary' => null,
        ],
        'store' => true,
        'temperature' => 1.0,
        'text' => [
            'format' => [
                'type' => 'text',
            ],
        ],
        'tool_choice' => 'auto',
        'tools' => [
            [
                'type' => 'web_search_preview',
                'domains' => [],
                'search_context_size' => 'medium',
                'user_location' => [
                    'type' => 'approximate',
                    'city' => null,
                    'country' => 'US',
                    'region' => null,
                    'timezone' => null,
                ],
            ],
        ],
        'top_p' => 1.0,
        'truncation' => 'disabled',
        'user' => null,
        'usage' => [
            'input_tokens' => 328,
            'input_tokens_details' => [
                'cached_tokens' => 0,
            ],
            'output_tokens' => 356,
            'output_tokens_details' => [
                'reasoning_tokens' => 0,
            ],
            'total_tokens' => 684,
        ],
    ];
}

/**
 * @return array<string, mixed>
 */
function listInputItemsResource(): array
{
    return [
        'object' => 'list',
        'data' => [
            [
                'type' => 'message',
                'id' => 'msg_67ccf190ca3881909d433c50b1f6357e087bb177ab789d5c',
                'status' => 'completed',
                'role' => 'user',
                'content' => [
                    [
                        'type' => 'text',
                        'text' => 'What was a positive news story from today?',
                        'annotations' => [],
                    ],
                ],
            ],
        ],
        'first_id' => 'msg_67ccf190ca3881909d433c50b1f6357e087bb177ab789d5c',
        'last_id' => 'msg_67ccf190ca3881909d433c50b1f6357e087bb177ab789d5c',
        'has_more' => false,
    ];
}

/**
 * @return array<string, mixed>
 */
function deleteResponseResource(): array
{
    return [
        'id' => 'resp_67ccf18ef5fc8190b16dbee19bc54e5f087bb177ab789d5c',
        'object' => 'response.deleted',
        'deleted' => true,
    ];
}

/**
 * @return array<string, mixed>
 */
function createStreamedResponseResource(): array
{
    return [
        'event' => 'response.created',
        'data' => createResponseResource(),
    ];
}

/**
 * @return resource
 */
function responseCompletionStream()
{
    return fopen(__DIR__.'/Streams/ResponseCompletionCreate.txt', 'r');
}
