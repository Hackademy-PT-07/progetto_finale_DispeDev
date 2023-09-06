<?php

namespace App\Jobs;

use App\Models\Image;
use Illuminate\Bus\Queueable;
use Spatie\Image\Manipulations;
use Illuminate\Queue\SerializesModels;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Contracts\Queue\ShouldBeUnique;
use Spatie\Image\Image as WatermarkSpatieImage;

class ResizeImage implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;
    private $w;
    private $h;
    private $fileName;
    private $path;
    /**
     * Create a new job instance.
     */
    public function __construct($filePath, $w, $h)
    {
        $this->path = dirname($filePath);
        $this->fileName = basename($filePath);
        $this->w = $w;
        $this->h = $h;
    }

    /**
     * Execute the job.
     */
    public function handle(): void
    {
        $w = $this->w;
        $h = $this->h;
        $srcPath = storage_path() . '/app/public/' . $this->path . '/' . $this->fileName;
        $destPath = storage_path() . '/app/public/' . $this->path . "/crop_{$w}x{$h}_" . $this->fileName;




        $croppedImage = WatermarkSpatieImage::load($srcPath)
                        ->crop(Manipulations::CROP_CENTER, $w, $h)
                        ->watermark(base_path('public/img/logo_presto.it_bianco.png'))
                        ->watermarkPosition('bottom-right')
                        ->watermarkFit(Manipulations::FIT_STRETCH)
                        ->watermarkWidth(40, Manipulations::UNIT_PERCENT)
                        ->watermarkPadding(10)
                        ->watermarkOpacity(60)
                        ->save($destPath);
    }
}
