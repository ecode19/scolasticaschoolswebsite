<?php

namespace App\Http\Controllers;

abstract class Controller
{
    public function getProgrammeVersions(Request $request)
    {
        $perPage = $request->input('per_page', '');
        $sortBy = $request->input('sort_by', '');
        $sortDirection = $request->input('sort_order', 'asc');
        $search = $request->input('search', '');

        // Extract column filters excluding pagination and sorting parameters
        $columnFilters = $request->all();
        unset($columnFilters['per_page'], $columnFilters['page'], $columnFilters['sort_by'], $columnFilters['sort_order'], $columnFilters['search']);

        $programmeVersion = ProgrammeVersion::select(

        )
            ->leftJoin('programme_categories', 'programme_categories.programme_category_id', '=', 'programmes.programme_category_id')
            ->leftJoin('departments', 'departments.dept_id', '=', 'programmes.dept_id')
            ->leftJoin('study_level', 'study_level.study_level_id', '=', 'programmes.study_level_id')
            ->where(function ($query) use ($search) {
                if (!empty($search)) {
                    $query->Where('programmes.programme_id', 'like', "%$search%");
                }
            });

        foreach ($columnFilters as $column => $value) {
            $programmeVersion->where($column, 'like', "%$value%");
        }

        $programmeVersions = $programmeVersion->orderBy($sortBy, $sortDirection)->paginate($perPage);

        return response()->json($programmeVersions);

    }
}
