<?php

return [
    /*
     * DataTables search options.
     */
    'search'         => [
        /*
         * Smart search will enclose search keyword with wildcard string "%keyword%".
         * SQL: column LIKE "%keyword%"
         */
        'smart'            => true,

        /*
         * Multi-term search will explode search keyword using spaces resulting into multiple term search.
         */
        'multi_term'       => true,

        /*
         * Case insensitive will search the keyword in lower case format.
         * SQL: LOWER(column) LIKE LOWER(keyword)
         */
        'case_insensitive' => true,

        /*
         * Wild card will add "%" in between every characters of the keyword.
         * SQL: column LIKE "%k%e%y%w%o%r%d%"
         */
        'use_wildcards'    => false,

        /*
         * Perform a search which starts with the given keyword.
         * SQL: column LIKE "keyword%"
         */
        'starts_with'      => false,
    ],

    /*
     * DataTables internal index id response column name.
     */
    'index_column'   => 'DT_RowIndex',

    /*
     * List of available builders for DataTables.
     * This is where you can register your custom dataTables builder.
     */
    'engines'        => [
        'eloquent'   => Yajra\DataTables\EloquentDataTable::class,
        'query'      => Yajra\DataTables\QueryDataTable::class,
        'collection' => Yajra\DataTables\CollectionDataTable::class,
        'resource' => Yajra\DataTables\ApiResourceDataTable::class,
    ],

 
    'builders'       => [
        //Illuminate\Database\Eloquent\Relations\Relation::class => 'eloquent',
        //Illuminate\Database\Eloquent\Builder::class            => 'eloquent',
        //Illuminate\Database\Query\Builder::class               => 'query',
        //Illuminate\Support\Collection::class                   => 'collection',
    ],


    'nulls_last_sql' => ':column :direction NULLS LAST',


    'error'          => env('DATATABLES_ERROR', null),

 
    'columns'        => [
 
        'excess'    => ['rn', 'row_num'],


        'escape'    => '*',

  
        'raw'       => ['action'],


        'blacklist' => ['password', 'remember_token'],

  
        'whitelist' => '*',
    ],

 
    'json'           => [
        'header'  => [],
        'options' => 0,
    ],

  
    'callback' => ['$', '$.', 'function'],
];
