<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Model\StockMergeDetail
 *
 * @property int $id
 * @property int $stock_merger_id
 * @property int $po_id
 * @property float $before_merge_qty
 * @property int $created_by
 * @property int $updated_by
 * @property int $deleted_by
 * @property \Carbon\Carbon|null $created_at
 * @property \Carbon\Carbon|null $updated_at
 * @property string|null $deleted_at
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\StockMergeDetail whereBeforeMergeQty($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\StockMergeDetail whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\StockMergeDetail whereCreatedBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\StockMergeDetail whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\StockMergeDetail whereDeletedBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\StockMergeDetail whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\StockMergeDetail wherePoId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\StockMergeDetail whereStockMergerId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\StockMergeDetail whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\StockMergeDetail whereUpdatedBy($value)
 * @mixin \Eloquent
 */
class StockMergeDetail extends Model
{
    //
}
