<?php

use App\Models\Wisata;
use App\Models\SubWisata;

function getMinIdWisata()
{
    return Wisata::orderBy('id', 'ASC')->limit(1)->value('id');
}

function getMaxIdWisata()
{
    return Wisata::orderBy('id', 'DESC')->limit(1)->value('id');
}

function backWisata($slug)
{
    $data = Wisata::where('slug', $slug)->first();
    $id = $data->id;
    $item = Wisata::where('id', $id-1)->first();

    if ($item) {
        return $item->slug;
    } else {
        return $slug;
    }
}

function nextWisata($slug)
{
    $data = Wisata::where('slug', $slug)->first();
    $id = $data->id;
    $item = Wisata::where('id', $id+1)->first();

    if ($item) {
        return $item->slug;
    } else {
        return $slug;
    }
}

function namaNextWisata($slug)
{
    $data = Wisata::where('slug', $slug)->first();
    $id = $data->id;
    $item = Wisata::where('id', $id+1)->first();

    if ($item) {
        return $item->nama;
    } else {
        return $slug;
    }
}

function getMinIdSubWisata($id)
{
    return SubWisata::where('wisata_id', $id)->orderBy('id', 'ASC')->limit(1)->value('id');
}

function getMaxIdSubWisata($id)
{
    return SubWisata::where('wisata_id', $id)->orderBy('id', 'DESC')->limit(1)->value('id');
}

function backSubWisata($slug)
{
    $data = SubWisata::where('slug', $slug)->first();
    $id = $data->id;
    $item = SubWisata::where('wisata_id', $data->wisata_id)->where('id', $id-1)->first();

    if ($item) {
        return $item->slug;
    } else {
        return $slug;
    }
}

function nextSubWisata($slug)
{
    $data = SubWisata::where('slug', $slug)->first();
    $id = $data->id;
    $item = SubWisata::where('wisata_id', $data->wisata_id)->where('id', $id+1)->first();

    if ($item) {
        return $item->slug;
    } else {
        return $slug;
    }
}

function namaNextSubWisata($slug)
{
    $data = SubWisata::where('slug', $slug)->first();
    $id = $data->id;
    $item = SubWisata::where('wisata_id', $data->wisata_id)->where('id', $id+1)->first();

    if ($item) {
        return $item->nama;
    } else {
        return $slug;
    }
}
