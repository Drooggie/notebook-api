<?php

namespace App\Http\Controllers\Swagger;

/**
 * @OA\Get(
 *   tags={"Note"},
 *   path="/api/v1/notebook/",
 *   summary="Index method of Note Controller",
 *
 *   @OA\Response(
 *     response=200,
 *     description="OK",
 *     @OA\JsonContent(
 *       @OA\Property(
 *         property="data",
 *         type="array",
 *         @OA\Items(ref="#/components/schemas/Note")
 *       ),
 *       @OA\Property(
 *         property="meta",
 *         type="object",
 *         @OA\Property(property="current_page", type="integer", example=1),
 *         @OA\Property(property="first_page_url", type="string", example="http://localhost:8888/api/v1/notebook?page=1"),
 *         @OA\Property(property="from", type="integer", example=1),
 *         @OA\Property(property="last_page", type="integer", example=1),
 *         @OA\Property(property="last_page_url", type="string", example="http://localhost:8888/api/v1/notebook?page=1"),
 *         @OA\Property(property="links", type="array",
 *             @OA\Items(
 *                 type="object",
 *                 @OA\Property(property="url", type="string", nullable=true),
 *                 @OA\Property(property="label", type="string", example="&laquo; Previous"),
 *                 @OA\Property(property="active", type="boolean", example=false)
 *             )
 *         ),
 *         @OA\Property(property="next_page_url", type="string", nullable=true),
 *         @OA\Property(property="path", type="string", example="http://localhost:8888/api/v1/notebook"),
 *         @OA\Property(property="per_page", type="integer", example=10),
 *         @OA\Property(property="prev_page_url", type="string", nullable=true),
 *         @OA\Property(property="to", type="integer", example=2),
 *         @OA\Property(property="total", type="integer", example=2)
 *       )
 *     )
 *   ),
 *
 *   @OA\Response(response=401, description="Unauthorized"),
 *   @OA\Response(response=404, description="Not Found")
 * ),
 *
 * 
 * @OA\Post(
 *   tags={"Note"},
 *   path="/api/v1/notebook/",
 *   security={{"BearerAuth": {}}},
 *   summary="Post method of Note Controller",
 *
 *   @OA\RequestBody(
 *     required=true,
 *     @OA\JsonContent(
 *       ref="#/components/schemas/NoteRequest"
 *     )
 *   ),
 *
 *   @OA\Response(
 *     response="200",
 *     description="OK",
 *     @OA\JsonContent(
 *       type="object",
 *       @OA\Property(
 *         property="message",
 *         type="string",
 *         example="You successfully created Note",
 *       ),
 *       @OA\Property(
 *         property="data",
 *         type="object",
 *         ref="#/components/schemas/Note"
 *       ),
 *     ),
 *   ),
 *   
 *   @OA\Response(
 *     response=401,
 *     description="Error: Unauthorized",
 *     @OA\JsonContent(
 *       type="object",
 *       @OA\Property(
 *         property="message",
 *         type="string",
 *         example="Unauthenticated"
 *       )
 *     )
 *   )
 * ),
 *
 * @OA\Get(
 *   tags={"Note"},
 *   path="/api/v1/notebook/{id}",
 *   summary="Show method of Note Controller",
 *
 *   @OA\Parameter(
 *     name="id",
 *     in="path",
 *     required=true,
 *     @OA\Schema(type="integer", example=1),
 *   ),
 *
 *   @OA\Response(
 *     response=200,
 *     description="OK",
 *     @OA\JsonContent(
 *       @OA\Property(
 *         property="data",
 *         type="object",
 *         ref="#/components/schemas/Note",
 *       )
 *     ),   
 *   )
 * ),
 *
 *
 * @OA\Patch(
 *   tags={"Note"},
 *   path="/api/v1/notebook/{id}",
 *   security={{"BearerAuth": {}}},
 *   summary="Update method of Note Controller",
 *
 *   @OA\Parameter(
 *     name="id",
 *     in="path",
 *     required=true,
 *     @OA\Schema(type="string", example=1)
 *   ),
 *
 *   @OA\RequestBody(
 *     required=true,
 *     @OA\JsonContent(
 *       @OA\Property(
 *         property="name",
 *         type="string",
 *         ref="#/components/schemas/NoteRequest",
 *       )
 *     )
 *   ),
 *
 *   @OA\Response(
 *     response="200",
 *     description="OK",
 *     @OA\JsonContent(
 *       type="object",
 *       @OA\Property(
 *         property="message",
 *         type="string",
 *         example="Note info updated",
 *       ),
 *       @OA\Property(
 *         property="data",
 *         type="object",
 *         ref="#/components/schemas/Note"
 *       ),
 *     ),
 *   )
 * ),
 *
 *
 * @OA\Delete(
 *   tags={"Note"},
 *   path="/api/v1/notebook/{id}",
 *   security={{"BearerAuth": {}}},
 *   summary="Destroy method of Note Controller",
 *
 *   @OA\Parameter(
 *     name="id",
 *     in="path",
 *     required=true,
 *     @OA\Schema(type="integer", example=1)
 *   ),
 *
 *   @OA\Response(
 *     response=204,
 *     description="No Content",
 *   )
 * ),
 *
 *
 * @OA\Schema(
 *   schema="Note",
 *   type="object",
 *   @OA\Property(property="id", type="integer", example=1),
 *   @OA\Property(property="user_id", type="integer", example=2),
 *   @OA\Property(property="full_name", type="string", example="Jhon Doe"),
 *   @OA\Property(property="company", type="string", example="My Company"),
 *   @OA\Property(property="phone_number", type="string", example="+77777777777"),
 *   @OA\Property(property="email", type="string", example="jhonDoe@email.com"),
 *   @OA\Property(property="birth_date", type="string", format="date", nullable=true),
 *   @OA\Property(property="photo_url", type="string", example="https://static.thenounproject.com/png/4154905-200.png")
 *                
 * ),
 * 
 * @OA\Schema(
 *     schema="NoteRequest",
 *     type="object",
 *     @OA\Property(property="full_name", type="string", example="Jhon Doe"),
 *     @OA\Property(property="company", type="string", example="My Company"),
 *     @OA\Property(property="phone_number", type="string", example="+77777777777"),
 *     @OA\Property(property="email", type="string", format="email", example="jhonDoeUpdated@email.com"),
 *     @OA\Property(property="birth_date", type="string", format="date-time", example="2005-12-04 02:45:57"),
 *     @OA\Property(property="photo_url", type="string", format="uri", example="https://static.thenounproject.com/png/4154905-200.png")
 * ),
 *
 */

class NoteController extends Controller {}
