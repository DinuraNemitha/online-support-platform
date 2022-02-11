@extends('layouts.master') @section('title','Home')

@section('css')

@stop

@section('content')
    <section class="grid">
        <article>
            <div class="row">
                <div class="card-box">
                    <h4 class="header-title mb-4">Sample Table</h4>
                    <div class="table-wrapper">
                        <table class="fl-table">
                            <thead>
                            <tr>
                                <th>Header 1</th>
                                <th>Header 2</th>
                                <th>Header 3</th>
                                <th>Header 4</th>
                                <th>Header 5</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>Content 1</td>
                                <td>
                                    <div class="onoffswitch">
                                        <input type="checkbox" class="toggle" id="toggle"/>
                                        <label for="toggle">
                                            <span class="on">Yes</span>
                                            <span class="off">No</span>
                                        </label>
                                    </div>
                                </td>
                                <td>
                                    <div class="styled-checkbox-main">
                                        <input class="styled-checkbox" id="styled-checkbox-1" type="checkbox" value="">
                                        <label for="styled-checkbox-1"></label>
                                    </div>
                                </td>
                                <td>
                                    <button type="submit" class="btn btn-sm" value="Submit">Submit</button>
                                </td>

                                <td><a href="#" class="btn update-btn">Update</a></td>

                            </tr>
                            <tr>
                                <td>Content 2</td>
                                <td>Content 2</td>

                                <td>
                                    <div class="styled-checkbox-main">
                                        <input class="styled-checkbox" id="styled-checkbox-2" type="checkbox" value="">
                                        <label for="styled-checkbox-2"></label>
                                    </div>
                                </td>
                                <td>
                                    <button type="submit" class="btn btn-sm" value="Submit">Submit</button>
                                </td>
                                <td><a href="#" class="btn update-btn">Update</a></td>
                            </tr>
                            <tr>
                                <td>Content 3</td>
                                <td>Content 3</td>
                                <td>
                                    <div class="styled-checkbox-main">
                                        <input class="styled-checkbox" id="styled-checkbox-3" type="checkbox" value="">
                                        <label for="styled-checkbox-3"></label>
                                    </div>
                                </td>
                                <td>
                                    <button type="submit" class="btn btn-sm" value="Submit">Submit</button>
                                </td>
                                <td><a href="#" class="btn update-btn">Update</a></td>
                            </tr>
                            <tr>
                                <td>Content 4</td>
                                <td>Content 4</td>
                                <td>
                                    <div class="styled-checkbox-main">
                                        <input class="styled-checkbox" id="styled-checkbox-4" type="checkbox" value="">
                                        <label for="styled-checkbox-4"></label>
                                    </div>
                                </td>
                                <td>
                                    <button type="submit" class="btn btn-sm" value="Submit">Submit</button>
                                </td>
                                <td><a href="#" class="btn update-btn">Update</a></td>
                            </tr>
                            <tr>
                                <td>Content 5</td>
                                <td>Content 5</td>
                                <td>
                                    <div class="styled-checkbox-main">
                                        <input class="styled-checkbox" id="styled-checkbox-5" type="checkbox" value="">
                                        <label for="styled-checkbox-5"></label>
                                    </div>
                                </td>
                                <td>
                                    <button type="submit" class="btn btn-sm" value="Submit">Submit</button>
                                </td>
                                <td><a href="#" class="btn update-btn">Update</a></td>
                            </tr>
                            <tr>
                                <td>Content 6</td>
                                <td>Content 6</td>
                                <td>
                                    <div class="styled-checkbox-main">
                                        <input class="styled-checkbox" id="styled-checkbox-6" type="checkbox" value="">
                                        <label for="styled-checkbox-6"></label>
                                    </div>
                                </td>
                                <td>
                                    <button type="submit" class="btn btn-sm" value="Submit">Submit</button>
                                </td>
                                <td><a href="#" class="btn update-btn">Update</a></td>
                            </tr>
                            <tr>
                                <td>Content 7</td>
                                <td>Content 7</td>
                                <td>
                                    <div class="styled-checkbox-main">
                                        <input class="styled-checkbox" id="styled-checkbox-7" type="checkbox" value="">
                                        <label for="styled-checkbox-7"></label>
                                    </div>
                                </td>
                                <td>
                                    <button type="submit" class="btn btn-sm" value="Submit">Submit</button>
                                </td>
                                <td><a href="#" class="btn update-btn">Update</a></td>
                            </tr>

                            <tbody>
                        </table>
                    </div>
                </div><!-- end col -->
            </div>
        </article>
    </section>
@stop

@section('js')

@stop
