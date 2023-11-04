<?php

use Illuminate\Support\Facades\File;
use Intervention\Image\Facades\Image;
use Buglinjo\LaravelWebp\Facades\Webp;
use Editors\Models\Media;

function image_mimes($validate = true)
{
    return $validate ? 'mimes:jpeg,png,webp|max:2048' : '.jpeg,.jpg,.png,.webp';
}

function webp_upload($img, $name, $folder = null)
{
    if (empty($img) || empty($folder)) return null;
    if ($img->getMimeType() !=  'image/webp') {
        $webp = Webp::make($img);
    } else {
        $webp = Image::make($img);
    }
    $name = $name . '.webp';
    if (!File::isDirectory($folder)) {
        File::makeDirectory($folder, 0777, true, true);
    }
    $name = str_replace("/", "-", $name);

    if (!$webp->save(public_path($folder . '/' . $name))) {
        return null;
    }

    return $name;
}

function file_upload($file, $name, $folder = null)
{
    if (empty($file) || empty($folder)) return null;
    if (!File::isDirectory($folder)) {
        File::makeDirectory($folder, 0777, true, true);
    }

    $name = str_replace("/", "-", $name);
    $filename = $name . '.' . $file->getClientOriginalExtension();

    if (!$file->move(public_path($folder), $filename)) {
        return null;
    }

    return $filename;
}

function upload_gallery($glist, $folder = 'uploads', $name = null)
{
    $list = [];
    if (!empty($glist1 = (array)@$glist['new'])) {
        $num = (int)count((array)@$glist['old']);
        foreach ($glist1 as $gallery) {
            $item = webp_upload($gallery, $name . $num, $folder);
            $list[] = $item;
            $num++;
        }
    }
    //dd((array)@$glist['old']);
    //dd(array_unique(array_merge($list, (array)@$glist['old']), SORT_REGULAR));
    return array_unique(array_merge($list, (array)@$glist['old']), SORT_REGULAR);
}

function formatBytes($bytes, $precision = 2)
{
    $units = array('B', 'KB', 'MB', 'GB', 'TB');
    $bytes = max($bytes, 0);
    $pow = floor(($bytes ? log($bytes) : 0) / log(1024));
    $pow = min($pow, count($units) - 1);

    // Uncomment one of the following alternatives
    //$bytes /= pow(1024, $pow);
    $bytes /= (1 << (10 * $pow));
    return round($bytes, $precision) . ' ' . $units[$pow];
}

function fileDel($path)
{
    @unlink($path);
}

function media_custom_url()
{
    return url('');
}

function image_error_bk($onerror = true, $placeholder = 'back-assets/img/placeholder2.png')
{
    if ($onerror) {
        return 'onerror=this.src="' . url($placeholder) . '"';
    }
    return 'this.src="' . url($placeholder) . '"';
}

function get_images($imglist, $folder = null, $id = null, $placeholder = 'back-assets/img/placeholder2.png')
{
    if (!is_array($imglist)) {
        if (stripos($imglist, '.') !== false) {
            return url("storage/uploads/{$folder}/{$imglist}");
        } elseif ((int)$imglist) {
            $media = Media::find((int)$imglist);
            if (!empty($media)) {
                return $media->image();
            }
        }
    } elseif (!empty($imglist) and is_array($imglist)) {
        if (stripos($imglist[0], '.') !== false) {
            $list = [];
            foreach ($imglist as $img) {
                $list[] = url("storage/uploads/{$folder}/{$img}");
            }
            return $list;
        } else {
            $images = Media::whereIn('id', (array)$imglist)->get();
            $list = [];
            foreach ($images as $img) {
                $item = $img->image();
                $list[] = $item;
            }
            return $list;
        }
    }
    return url($placeholder);
}
