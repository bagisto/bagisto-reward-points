<?php

namespace Webkul\TableRate\Exports;

use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;

/**
 * DataGridExport Class
 *
 * @author Vivek Sharma <viveksh047@webkul.com> @vivek-webkul
 * @copyright 2018 Webkul Software Pvt Ltd (http://www.webkul.com)
 */
class DataGridExport implements FromView, ShouldAutoSize
{
    /**
     * DataGrid instance
     *
     * @var mixed
     */
    protected $gridData = [];
    
    /**
     * DataGrid instance
     *
     * @var mixed
     */
    protected $exportColumns = [
        'superset_code',
        'country',
        'state',
        'zip_from',
        'zip_to',
        'weight_from',
        'weight_to',
        'price',
        'is_zip_range',
        'zip_code'
    ];

    /**
     * Create a new instance.
     *
     * @param mixed DataGrid
     * @return void
     */
    public function __construct($gridData)
    {
        $this->gridData = $gridData;
    }

    /**
     * function to create a blade view for export.
     *
     */
    public function view(): View
    {
        $columns = [];

        foreach($this->gridData as $key => $gridData) {
            $columns = array_keys((array) $gridData);

            break;
        }
        
        foreach($this->gridData as $key => $gridData) {
            $allow_records = [];
            $record_array = (array) $gridData;
            foreach ($record_array as $index => $record) {
                if ( in_array($index, $this->exportColumns) ) {
                    $allow_records[$index] = $record;
                }
            }
            $this->gridData[$key] = (object) $allow_records;
        }
        
        $allow_columns = [];
        foreach ($columns as $index => $column) {
            if ( in_array($column, $this->exportColumns)) {
                $allow_columns[] = $column;
            }
        }
        
        return view('tablerate::export.temp', [
            'columns' => $allow_columns,
            'records' => $this->gridData,
        ]);
    }
}